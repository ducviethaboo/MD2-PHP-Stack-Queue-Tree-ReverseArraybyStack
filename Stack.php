<?php


class Stack
{
    public $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function insert($item)
    {
        array_unshift($this->stack,$item);
        return $this->stack;
    }
    public function push($arr)
    {
        for ($i = 0; $i < count($arr); $i++) {
            array_push($this->stack, $arr[$i]);
        }
    }

    public function getAndpush($arr)
    {
        for($i = 0; $i < count($this->stack);$i++) {
            array_unshift($arr,$this->stack[$i]);
        }
        return $arr;
    }
}