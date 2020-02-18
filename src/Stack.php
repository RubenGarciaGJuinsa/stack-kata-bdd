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

    public function push($element)
    {
        if ($this->getPosition() >= $this->getSize()) {
            throw new \Exception('Stack Overflow');
        }

        $this->position++;
        $this->stack[$this->getPosition()] = $element;
    }

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

    public function pull()
    {
        $element = $this->stack[$this->getPosition()];
        $this->position--;

        return $element;
    }
}