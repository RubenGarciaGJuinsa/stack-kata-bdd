<?php


namespace Kata;


class Stack
{
    protected array $stack = [];

    protected int $size;

    protected int $position = 0;

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    public function __construct($size)
    {
        $this->size = $size;
    }
}