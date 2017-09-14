#Video Tutorial

!![500x281](https://player.vimeo.com/video/131698235)

#Socialite Quickstart

The first thing we must do is to go to any of our social providers (Facebook, Github or Google), and create our apps.

####At this point i assume that at least you have the proper knowledge to achieve that. In case your not. Please refer to this documentation:

* http://opauth.org/
* http://laravel.com/docs/5.0/authentication#social-authentication
* https://github.com/laravel/socialite
* https://laracasts.com/series/whats-new-in-laravel-5/episodes/9

When you've created your apps you will have an App id and an App Secret which gives you authorization keys to use those services. Please copy and paste them into the corresponding fields as shown in the image below:

![Paste your keys here](http://bit.ly/1NhBRMM)

###Lets define the fields in the picture above:

1. Automatic Redirection: If you select this feature, the user will be redirected to the page that was at the time of logon is attempted, which means that is this is off, you can manually select a page to redirect the user to after giving access.
2. Callback URL: Some providers requires that you specify the URL they will be sending the data to after a login request such as GitHub. Copy and paste this into your Provider's app settings.
3. Enabled: If this check-box is selected, a link will appear wherever the component is used.
4. Facebook, GitHub, Google tabs: Those are the individual settings for each provider supported by the plugin.

###Lets drop our component into the page

When you drop the Socialite's LoginButtons component into your page, it contains the following markup:

```
{% component 'loginbutton' %}
```
Becomes

```
<!-- Social login Buttons -->
<loginbuttons>
    {% for key, provider in providers %}
        {% if provider.is_activated %}
            <a href="{{ route(key) }}" class="btn btn-lg btn-social btn-{{ key }}">
            <i class="fa fa-{{ key }}"></i> &nbsp; {{ key }}
            </a>
        {% endif %}
    {% endfor %}
</loginbuttons>
<!-- /Social login Buttons -->
```

The component itself has a built in CSS which gives you a beautiful kick start design as shown in the image below:

![enter image description here](http://i.snag.gy/B3M2E.jpg) 

###User Plugin Extension

The Socialite Plugin ads fields to the users administration section which helps you determinate which users has been registered using Social Providers and what Social Provider they have used. Please refer at the image below:

![enter image description here](https://i.snag.gy/UTRAt0.jpg)

>As you noticed, this plugin gives you a clean and beautiful way to integrate the RainLab.User plugin with the most popular Social Providers.