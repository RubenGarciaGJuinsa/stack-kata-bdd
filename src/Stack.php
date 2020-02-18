<?php


namespace Kata;


class Stack
{
    protected array $stack = [];

    protected int $size;

    protected int $position = 0;

    public function __construct($size)
    {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    public function push($element)
    {
        $stack[$this->getPosition() + 1] = $element;
        $this->position++;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }
}