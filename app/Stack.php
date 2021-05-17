<?php

//include_once "app/index.php";

class Stack
{
    public array $stack;
    public int $limit;

    public function __construct(int $limit = 10)
    {
        $this->stack = [];
    }

    public function push($element)
    {
        array_unshift($this->stack, $element);
    }

    public function pop(): array
    {
       $getElement = array_shift($this->stack);
       array_push($this->stack, $getElement);
       return $this->stack;
    }
}