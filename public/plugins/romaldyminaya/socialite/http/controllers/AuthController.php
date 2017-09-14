<?php namespace RomaldyMinaya\Socialite\Http\Controllers;

use Auth;
use Config;
use Session;
use Laravel\Socialite\Contracts\Factory as Socialite;
use Illuminate\Routing\Controller;
use RomaldyMinaya\Socialite\Models\Settings;
use Illuminate\Http\Request;
use RomaldyMinaya\Socialite\Repositories\UserRepository;
use Cms\Classes\Page;
use Redirect;

class AuthController extends Controller
{
    protected $settings;
    protected $auth;
    protected $users;
    protected $socialite;
    protected $request;
    protected $provider;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserRepository $users, Auth $auth, Socialite $socialite, Request $request)
    {
        $this->middleware('RomaldyMinaya\Socialite\Http\Middleware\Provider');
        $this->settings     = Settings::instance()->toArray();
        $this->socialite    = $socialite;
        $this->users        = $users;
        $this->auth         = $auth::instance();
        $this->request      = $request;
        $this->provider     = $request->provider;
    }

    /**
     * Execute the Login or SignIn process
     */
    public function execute()
    {
        return $this->getAuthorizationFirst();
    }

    /**
     * Callback url where the user is redirected from the social provider
     */
    public function callback()
    {
        if( !$this->request->has('code')) return $this->redirectToLoginPage();

        $user   = $this->users->findByUsernameOrCreate($this->getProviderUser(), $this->provider);
        
        $this->auth->login($user, true);

        return redirect($this->getSuccessUrl()); 
    }

    /**
     * Redirect the user to the Provider's authentication page.
     *
     * @return Response
     */    
    public function getAuthorizationFirst()
    {
        $referer = $this->request->server('HTTP_REFERER');
        $scopes  = $this->getProviderScopes();

        Session::put('socialite_redirect', $referer);

        if(count($scopes))
        {
            return $this->getProvider()->scopes($scopes)->redirect();
        }
        else
        {
            return $this->getProvider()->redirect();
        }
    }

    /**
     * Redirect the user to the page containing the [socialiteLoginbuttons] component
     */
    public function redirectToLoginPage()
    {
        $pages      = Page::sortBy('baseFileName'); 
        $loginPage  = '';

        foreach($pages as $page)
        {
            if($page->hasComponent('socialiteLoginbuttons'))
            {
                $loginPage = $page->settings['url'];
            }
        }

        return Redirect::to($loginPage);
    }

    /**
     * Create and Initializes the Auth provider. 
     *
     * @return Provider
     */
    public function getProvider()
    {
        /**
         * Prepare the config to be pased to the bulder
         */
        $configData = array_merge($this->settings[$this->provider], 
            ['redirect' => route('socialiteCallback', $this->provider)]
        );

        /**
         * Set the config date so can be used by the internal
         * SocialiteManager's Facade
         */
        Config::set("services.{$this->provider}", $configData);

        return $this->socialite->driver($this->provider);
    }

    /**
     * Return the current provider user's data
     * @return ProviderUser
     */
    public function getProviderUser()
    {
        return $this->getProvider()->user();
    }

    /**
     * Return the configured url to return the user when logged in succesfully
     * @return String
     */
    public function getSuccessUrl()
    {
        /**
         * If automatic redirect is activated the user will be redirected
         * to the page he was at the momoent of loggend in, otherwise the
         * page configured in the settings will be used
         */
        if($this->settings['automatic_redirect'])
        {
            $redirectUrl = Session::pull('socialite_redirect', '/');
        }
        else
        {
            $redirectUrl = Page::url($this->settings['logged_in_redirect']);

        }

        return (string)$redirectUrl;
    }

    /**
     * Return the configured scopes( Permissions ) required for the provider
     * @return Array
     */
    public function getProviderScopes()
    {
        $scopes         = $this->settings[$this->provider]['scopes'];
        $returnScopes   = [];

        foreach($scopes as $scope)
        {
            $returnScopes[] = trim(strtolower($scope['scope']));
        }

        return $returnScopes;
    }
}