<?php

declare(strict_types=1);

namespace Shapin\Vimeo\Model;

final class Link
{
    /**
     * @var string
     */
    private $uri;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $link;

    public function getUri(): string
    {
        return $this->uri;
    }

    public function setUri(string $uri): void
    {
        $this->uri = $uri;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $link): void
    {
        $this->link = $link;
    }
}
