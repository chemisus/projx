<?php

class LibraryResourceConfiguration
{
    private $json;

    public function __construct($json)
    {
        $this->json = $json;
    }

    public function name()
    {
        return $this->json->name;
    }

    public function version()
    {
        return $this->json->version;
    }

    public function repository()
    {
        return $this->json->repository;
    }
}