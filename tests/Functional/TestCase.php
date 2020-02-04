<?php

declare(strict_types=1);

/*
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace Shapin\Vimeo\Tests\Functional;

use PHPUnit\Framework\TestCase as BaseTestCase;
use Shapin\Vimeo\VimeoClient;
use Symfony\Component\HttpClient\HttpClient;

abstract class TestCase extends BaseTestCase
{
    const VIMEO_TOKEN = 'da69bb8f91006deadff3ef1f3d1921cb';

    public function getVimeoClient(): VimeoClient
    {
        $httpClient = HttpClient::create([
            'base_uri' => 'https://api.vimeo.com/',
            'auth_bearer' => self::VIMEO_TOKEN,
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ]);

        return new VimeoClient($httpClient);
    }
}
