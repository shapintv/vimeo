<?php

declare(strict_types=1);

/*
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace Shapin\Vimeo;

use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class VimeoClient
{
    private $httpClient;
    private $serializer;

    public function __construct(HttpClientInterface $talkjsClient, SerializerInterface $serializer = null)
    {
        $this->httpClient = $talkjsClient;
        $this->serializer = $serializer ?: new Serializer();
    }

    public function videos(): Api\Video
    {
        return new Api\Video($this->httpClient, $this->serializer);
    }
}
