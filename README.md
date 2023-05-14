# http-client

[![Latest Stable Version](https://img.shields.io/github/v/release/brokeyourbike/http-client-php)](https://github.com/brokeyourbike/http-client-php/releases)
[![Total Downloads](https://poser.pugx.org/brokeyourbike/http-client/downloads)](https://packagist.org/packages/brokeyourbike/http-client)
[![Maintainability](https://api.codeclimate.com/v1/badges/b06e5132dfa698a20769/maintainability)](https://codeclimate.com/github/brokeyourbike/http-client-php/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/b06e5132dfa698a20769/test_coverage)](https://codeclimate.com/github/brokeyourbike/http-client-php/test_coverage)

Http client interface and supporting trait

## Installation

```bash
composer require brokeyourbike/http-client
```

## Usage

```php
use BrokeYourBike\HttpClient\HttpClientInterface;
use BrokeYourBike\HttpClient\HttpClientTrait;

class ApiClient implements HttpClientInterface
{
    use HttpClientTrait;

    public function __construct(\GuzzleHttp\ClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }
}
```

## Authors
- [Ivan Stasiuk](https://github.com/brokeyourbike) | [Twitter](https://twitter.com/brokeyourbike) | [LinkedIn](https://www.linkedin.com/in/brokeyourbike) | [stasi.uk](https://stasi.uk)

## License
[Mozilla Public License v2.0](https://github.com/brokeyourbike/http-client-php/blob/main/LICENSE)
