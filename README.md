# Laravel Frontend Services

Laravel Frontend Services exposes [Blade Components](https://laravel.com/docs/8.x/blade#components) that make it easier to integrate and include the scripts of third-party services. 

[![Latest Stable Version](https://poser.pugx.org/liran-co/laravel-frontend-services/v/stable)](https://packagist.org/packages/liran-co/laravel-frontend-services) [![Total Downloads](https://poser.pugx.org/liran-co/laravel-frontend-services/downloads)](https://packagist.org/packages/liran-co/laravel-frontend-services) [![License](https://poser.pugx.org/liran-co/laravel-frontend-services/license)](https://packagist.org/packages/liran-co/laravel-frontend-services)

## Installation

To get started, install the `liran-co/laravel-frontend-services` package:

```bash
composer require liran-co/laravel-frontend-services
```

## Usage

First, add the relevant configuration values for each service you'd like to use in the `config/services.php` file.  

```
<?php

return [

    // ...

    'intercom' => [
        'app_id' => env('INTERCOM_APP_ID'),
    ],

    // ...

];
```


You'll find a full list of supported services below with their corresponding configuration keys.

Next, use Blade component syntax to include the service in your view:

```bash
<x-services::intercom />
```

Typically you'll want to either do this in the `<head>` section of your site or before the closing `</body>` tag.

## Advanced Usage

### Show

If you'd like to include a service based on some conditional, you can use the `show` attribute on the component. For example, to only include the Intercom service when a user is logged in, you can do this:

```bash
<x-services::intercom show={Auth::check()} />
```

### Environments

Since it's common to only include certain scripts in production environments, you can define an `environments` key in your config file that will automatically cause the service to be included if the current environment matches one in the array:

```
'intercom' => [
    'app_id' => env('INTERCOM_APP_ID'),
    'environments' => ['production', 'staging'],
],
```

## Supported Services

Service | Component | Configurations
--- | --- | ---
[Facebook](https://developers.facebook.com/docs/javascript/) | `<x-services::facebook />` | `app_id`
[Fullstory](https://fullstory.com) | `<x-services::fullstory />` | `org_id` `debug`
[Google Analytics](http://analytics.google.com) | `<x-services::googleanalytics />` | `property_id`
[Heap](https://heap.io) | `<x-services::heap />` | `app_id`
[Intercom](https://intercom.com) | `<x-services::intercom />` | `app_id`
[Segment](https://segment.com) | `<x-services::segment />` | `write_key`
[Sentry](https://sentry.io) | `<x-services::sentry />` | `dsn` `environment` `debug`

## License
Released under the [MIT](https://choosealicense.com/licenses/mit/) license. See [LICENSE](LICENSE.md) for more information.