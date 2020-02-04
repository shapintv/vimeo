<?php

declare(strict_types=1);

namespace Shapin\Vimeo\Model;

abstract class Resource
{
    /**
     * @var string
     */
    private $uri;

    /**
     * @var string
     */
    private $resourceKey;

    public function getUri(): string
    {
        return $this->uri;
    }

    public function setUri(string $uri): void
    {
        $this->uri = $uri;
    }

    public function getResourceKey(): string
    {
        return $this->resourceKey;
    }

    public function setResourceKey(string $resourceKey): void
    {
        $this->resourceKey = $resourceKey;
    }
}
