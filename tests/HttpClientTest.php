<?php

// Copyright (C) 2021 Ivan Stasiuk <brokeyourbike@gmail.com>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\Tests\HttpClient;

use PHPUnit\Framework\TestCase;
use BrokeYourBike\Tests\HttpClient\HttpClientFixture;
use BrokeYourBike\HttpClient\HttpClientTrait;
use BrokeYourBike\HttpClient\HttpClientInterface;

/**
 * @author Ivan Stasiuk <brokeyourbike@gmail.com>
 */
class HttpClientTest extends TestCase
{
    /** @test */
    public function it_implemets_http_client_interface(): void
    {
        $localClient = new HttpClientFixture((new \GuzzleHttp\Client()));

        $this->assertInstanceOf(HttpClientInterface::class, $localClient);
    }

    /** @test */
    public function it_uses_http_client_trait(): void
    {
        $usedTraits = class_uses(HttpClientFixture::class);

        $this->assertArrayHasKey(HttpClientTrait::class, $usedTraits);
    }

    /** @test */
    public function it_can_return_http_client()
    {
        $httpClient = new \GuzzleHttp\Client();

        $localClient = new HttpClientFixture($httpClient);

        $this->assertSame($httpClient, $localClient->getHttpClient());
    }

    /** @test */
    public function it_can_set_http_client()
    {
        $httpClient1 = new \GuzzleHttp\Client();
        $httpClient2 = new \GuzzleHttp\Client();

        $localClient = new HttpClientFixture($httpClient1);
        $localClient->setHttpClient($httpClient2);

        $this->assertSame($httpClient2, $localClient->getHttpClient());
    }
}
