<?php namespace RomaldyMinaya\Socialite\Http\Middleware;

use Closure;

class Provider {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$providers = \RomaldyMinaya\Socialite\Plugin::$providers;

		if (!in_array($request->provider, $providers)) {
			throw new \Exception('Unauthorized action.');
		}

		return $next($request);
	}

}
