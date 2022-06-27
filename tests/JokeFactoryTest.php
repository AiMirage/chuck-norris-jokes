<?php

namespace AiMirage\ChuckNorrisJokes\Tests;

use AiMirage\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /**
     * @test
     *
     * @return void
     */
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke'
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame($joke, 'This is a joke');
    }


    /**
     * @test
     *
     * @return void
     */
    public function it_returns_a_predefined_joke()
    {
        $jokes = new JokeFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $jokes->allJokes());
    }
}
