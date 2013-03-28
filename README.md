twig-extensions-bundle
======================

This bundle contains helpful Twig extensions for the Symfony2 framework. These extensions provide simple, front end 
functionality that is often times present on web pages.

## Included Extensions

#### is_external
Determines if the url points to a host external to the current site.

#### Arguments
1. `host`: Provide the host you want to check against. You can get the current host by passing `app.request.httpHost`.

```twig
{{ 'http://www.example.com' | is_external(app.request.httpHost) }}
```


#### facebook_share
Generates a url for sharing the current page on Facebook. Accepts the following parameters:

##### Arguments
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


#### pinterest_share
Generates a url for sharing the current page on Pinterest. Accepts the following parameters:

##### Arguments
1. `media`: path to the media being pinned
2. `description`: content of the post

```twig
{{ url('route', { id: entity.id }) | pinterest_share('http://example.com/images/img.jpg', 'description') }}
```


#### twitter_share
Generates a url for sharing the current page on Twitter. Accepts a message to input into the tweet.

##### Arguments
1.  `message`: Body of the tweet

```twig
{{ url('route', { id: entity.id }) | twitter_share('Check out this page!') }}
```


## To Do

1.  Make Facebook app id paramater a config setting instead of a parameter in parameters.yml