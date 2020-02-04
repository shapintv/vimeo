<?php

declare(strict_types=1);

namespace Shapin\Vimeo\Model;

abstract class Resource
{
    /**
     * @var ?string
     */
    private $uri;

    /**
     * @var string
     */
    private $resourceKey;

    public function getUri(): ?string
    {
        return $this->uri;
    }

    public function setUri(string $uri = null): void
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

    /**
     * @return int|string
     */
    public function getId()
    {
        if (null === $this->uri) {
            throw new \RuntimeException('Unable to find a ID for this resource');
        }

        $parts = explode('/', $this->uri);
        if (empty($parts)) {
            throw new \RuntimeException('Incorrect resource URI given.');
        }

        $id = end($parts);

        if (is_numeric($id)) {
            return (int) $id;
        }

        return $id;
    }
}
