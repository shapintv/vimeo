<?php

declare(strict_types=1);

namespace Shapin\Vimeo\Model\Video;

final class Stats
{
    /**
     * @var ?int
     */
    private $plays;

    public function getPlays(): ?int
    {
        return $this->plays;
    }

    public function setPlays(int $plays = null): void
    {
        $this->plays = $plays;
    }
}
