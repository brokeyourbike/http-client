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
interface HttpClientInterface
{
    /**
     * Returns the http client.
     *
     * @return  \GuzzleHttp\ClientInterface
     */
    public function getHttpClient(): \GuzzleHttp\ClientInterface;

    /**
     * Updates the http client.
     *
     * @param \GuzzleHttp\ClientInterface  $httpClient
     *
     * @return  void
     */
    public function setHttpClient(\GuzzleHttp\ClientInterface $httpClient): void;
}
