<?php

declare(strict_types=1);

namespace Shapin\Vimeo\Model;

use Shapin\Vimeo\Model\Picture\PictureSize;

final class Picture extends Resource
{
    /**
     * @var bool
     */
    private $active;

    /**
     * @var string
     */
    private $type;

    /**
     * @var array<PictureSize>
     */
    private $sizes;

    public function isActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): void
    {
        $this->active = $active;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return array<PictureSize>
     */
    public function getSizes(): array
    {
        return $this->sizes;
    }

    /**
     * @param array<PictureSize> $sizes
     */
    public function setSizes(array $sizes): void
    {
        $this->sizes = $sizes;
    }

    public function addSize(PictureSize $size): void
    {
        $this->sizes[] = $size;
    }
}
