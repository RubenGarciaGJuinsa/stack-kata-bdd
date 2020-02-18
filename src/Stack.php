<?php


namespace Kata;


class Stack
{
    protected array $stack = [];

    protected int $size;

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