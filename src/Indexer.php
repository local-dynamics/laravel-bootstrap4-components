<?php

namespace LocalDynamics\Bootstrap4Components;

class Indexer
{
    private $index = 0;

    public function next()
    {
        return $this->index++;
    }
}
