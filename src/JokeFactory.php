<?php

namespace AiMirage\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'joke 1',
        'joke 2',
        'joke 3',
    ];

    public function allJokes(): array
    {
        return $this->jokes;
    }

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke(): string
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
