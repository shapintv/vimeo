# Vimeo PHP SDK

[![Latest version](https://img.shields.io/github/release/shapintv/vimeo.svg?style=flat-square)](https://github.com/shapintv/vimeo/releases)
[![Build status](https://img.shields.io/travis/shapintv/vimeo.svg?style=flat-square)](https://travis-ci.com/shapintv/vimeo)
[![Total downloads](https://img.shields.io/packagist/dt/shapin/vimeo.svg?style=flat-square)](https://packagist.org/packages/shapin/vimeo)

## Install

Via Composer

``` bash
composer require shapintv/vimeo
```

## Usage

### Create a `VimeoClient`

```php
use Shapin\Vimeo\VimeoClient;
use Symfony\Component\HttpClient\HttpClient;

$httpClient = HttpClient::create([
    'base_uri' => 'https://api.vimeo.com/',
    'auth_bearer' => self::VIMEO_TOKEN,
    'headers' => [
        'Content-Type' => 'application/json',
        'Accept' => 'application/vnd.vimeo.*+json;version=3.4',
    ],
]);

$client = new VimeoClient($httpClient);
```

### Deal with videos

```php
// Get a video
$video = $client->videos()->get('my_custom_id', 362164795);
```

### Integration with symfony

Create a new HttpClient:

```yml
framework:
    http_client:
        scoped_clients:
            vimeo.client:
                base_uri: 'https://api.vimeo.com/'
                auth_bearer: '%env(VIMEO_TOKEN)%'
                headers:
                    'Content-Type': 'application/json'
                    'Accept': 'application/vnd.vimeo.*+json;version=3.4'
```

Then create your service:

```yml
services:
    Shapin\Vimeo\VimeoClient: ~
```

You're done!

One day, I may consider creating a bundle in order to bootstrap this SDK...

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
