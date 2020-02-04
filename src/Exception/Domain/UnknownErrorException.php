<?php

declare(strict_types=1);

/*
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace Shapin\Vimeo\Exception\Domain;

use Shapin\Vimeo\Exception\DomainException;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class UnknownErrorException extends \Exception implements DomainException
{
    private $response;

    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }
}
