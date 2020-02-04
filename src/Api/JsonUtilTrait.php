<?php

declare(strict_types=1);

/*
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace Shapin\Vimeo\Api;

use Shapin\Vimeo\Exception\Domain as DomainExceptions;
use Shapin\Vimeo\Exception\DomainException;
use Symfony\Contracts\HttpClient\ResponseInterface;

trait JsonUtilTrait
{
    /**
     * Handle HTTP errors.
     *
     * @throws DomainException
     */
    protected function handleErrors(ResponseInterface $response): void
    {
        if (200 === $response->getStatusCode()) {
            return;
        }

        switch ($response->getStatusCode()) {
            case 400:
                throw new DomainExceptions\BadRequestException($response);
            case 401:
                throw new DomainExceptions\UnauthorizedException();
            case 404:
                throw new DomainExceptions\NotFoundException();
            case 429:
                throw new DomainExceptions\TooManyRequestsException();
            case 503:
                throw new DomainExceptions\TooManyRequestsException();
            default:
                throw new DomainExceptions\UnknownErrorException($response);
        }
    }
}
