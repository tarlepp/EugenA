<?php

namespace EA;

class Game
{
    private string $info;

    public function __construct()
    {
        $this->setInfo('my game');
    }

    public function getInfo(): string
    {
        return $this->info;
    }

    public function setInfo($info): void
    {
        $this->info = $info;
    }
}
