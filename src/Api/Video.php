<?php

declare(strict_types=1);

/*
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace Shapin\Vimeo\Api;

use Shapin\Vimeo\Model;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class Video
{
    use ErrorHandlerTrait;

    private $client;
    private $serializer;

    public function __construct(HttpClientInterface $vimeoClient, SerializerInterface $serializer)
    {
        $this->client = $vimeoClient;
        $this->serializer = $serializer;
    }

    public function get(int $id): Model\Video
    {
        $response = $this->client->request('GET', "videos/$id");

        $this->handleErrors($response);

        /** @var Model\Video */
        $video = $this->serializer->deserialize($response->getContent(), Model\Video::class, 'json');

        return $video;
    }
}
