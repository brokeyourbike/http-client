<?php

// Copyright (C) 2021 Ivan Stasiuk <brokeyourbike@gmail.com>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\HttpClient;

/**
 * @author Ivan Stasiuk <brokeyourbike@gmail.com>
 */
trait HttpClientTrait
{
    /**
     * HTTP client
     *
     * @var \GuzzleHttp\ClientInterface
     */
    protected $httpClient;

    /**
     * Returns the http client.
     *
     * @return  \GuzzleHttp\ClientInterface
     */
    public function getHttpClient(): \GuzzleHttp\ClientInterface
    {
        return $this->httpClient;
    }

    /**
     * Updates the http client.
     *
     * @return  void
     */
    public function setHttpClient(\GuzzleHttp\ClientInterface $httpClient): void
    {
        $this->httpClient = $httpClient;
    }
}
