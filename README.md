# http-client

[![Latest Stable Version](https://img.shields.io/github/v/release/brokeyourbike/http-client)](https://github.com/brokeyourbike/http-client/releases)
[![ci](https://github.com/brokeyourbike/http-client/actions/workflows/ci.yml/badge.svg)](https://github.com/brokeyourbike/http-client/actions/workflows/ci.yml)
[![codecov](https://codecov.io/gh/brokeyourbike/http-client/branch/main/graph/badge.svg?token=ImcgnxzGfc)](https://codecov.io/gh/brokeyourbike/http-client)
[![Type Coverage](https://shepherd.dev/github/brokeyourbike/http-client/coverage.svg)](https://shepherd.dev/github/brokeyourbike/http-client)
[![Total Downloads](https://poser.pugx.org/brokeyourbike/http-client/downloads)](https://packagist.org/packages/brokeyourbike/http-client)
[![License: MPL-2.0](https://img.shields.io/badge/license-MPL--2.0-purple.svg)](https://github.com/brokeyourbike/http-client/blob/main/LICENSE)

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

## License
[Mozilla Public License v2.0](https://github.com/brokeyourbike/http-client/blob/main/LICENSE)
