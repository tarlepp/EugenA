<?php

namespace EA\Tests;

use EA\Game;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    public function testGameInit(): void
    {
        $game = new Game();

        $this->assertInstanceOf(Game::class, $game);
        $this->assertEquals('my game', $game->getInfo());
    }
}
