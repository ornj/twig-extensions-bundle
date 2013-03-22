twig-extensions-bundle
===========

This bundle contains helpful Twig extensions for the Symfony2 framework. These extensions provide simple, front end 
functionality that is often times present on web pages.

## Included Extensions

#### Twitter/ShareExtension
Generates a url for sharing the current page on Twitter. Accepts a message to input into the tweet.

```twig
{{ url('route', { id: entity.id }) | twitter_share('Check out this page!') }}
```

#### Facebook/ShareExtension
Generates a url for sharing the current page on Facebook. Accepts the following parameters:

1. `picture`: path to an image
2. `name`: the post title
3. `caption`: caption to show next to the image
4. `description`: content of the post
5. `redirect`: where to send the user after they share the post 

```twig
{{ url('route', { id: entity.id }) | facebook_share('http://example.com/images/img.jpg', 'name', 'caption', 'description', 'example.com/redirect) }}
```

In addition to the above parameters you must also provide a Facebook application id. Currently the parameter `facebook_app_id` 
is being used. You can set the parameter however you'd like. One location this could be defined is in `app/config/parameters.yml`.

#### Pinterest/ShareExtension
Generates a url for sharing the current page on Pinterest. Accepts the following parameters:

1. `media`: path to the media being pinned
2. `description`: content of the post

```twig
{{ url('route', { id: entity.id }) | pinterest_share('http://example.com/images/img.jpg', 'description') }}
```

### To Do

1.  Make Facebook app id paramater a config setting instead of a parameter in parameters.yml