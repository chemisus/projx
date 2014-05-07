<?php

class JsonLibrary implements Library
{
    private $json;

    public function __construct($json)
    {
        $this->json = $json;
    }

    /**
     * @return string
     */
    public function name()
    {
        return $this->json->name;
    }

    /**
     * @return string
     */
    public function version()
    {
        return $this->json->version;
    }

    /**
     * @return string
     */
    public function repository()
    {
        return $this->json->repository;
    }
}