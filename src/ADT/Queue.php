<?php

namespace Braddle\PhpUk2023\ADT;

class Queue
{
    private $values = [];

    public function isEmpty()
    {
        return count($this->values) === 0;
    }

    public function add(string $value)
    {
        $this->values[] = $value;
    }

    public function size()
    {
        return count($this->values);
    }

    public function poll()
    {
        return array_shift($this->values);
    }

    public function peek()
    {
        if (!$this->size()) {
            return null;
        }
        reset($this->values);
        return current($this->values);
    }

    public function remove()
    {
        $value = $this->poll();
        if ($value !== null) {
            return $value;
        }

        throw new \Exception('No such element exception');
    }

    public function element()
    {
        $value = $this->peek();
        if ($value !== null) {
            return $value;
        }

        throw new \Exception('No such element exception');
    }
}
