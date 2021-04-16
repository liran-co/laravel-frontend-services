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

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'intercom' => [
        'app_id' => env('INTERCOM_APP_ID'),
    ],

    // ...

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

## Supported Services

Service | Component | Configurations
--- | --- | ---
[Facebook](https://facebook.com) | `<x-services::facebook />` | `app_id`
[Fullstory](https://fullstory.com) | `<x-services::fullstory />` | `org_id` `debug`
[Google Analytics](http://analytics.google.com) | `<x-services::googleanalytics />` | `property_id`
[Heap](https://heap.io) | `<x-services::heap />` | `app_id`
[Intercom](https://intercom.com) | `<x-services::intercom />` | `app_id`
[Segment](https://segment.com) | `<x-services::segment />` | `write_key`
[Sentry](https://sentry.com) | `<x-services::sentry />` | `dsn` `environment` `debug`

## License
Released under the [MIT](https://choosealicense.com/licenses/mit/) license. See [LICENSE](LICENSE.md) for more information.