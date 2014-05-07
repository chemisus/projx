<?php

class Configuration
{
    private $json;

    public function __construct($json)
    {
        $this->json = $json;
    }

    /**
     * @return string
     */
    public function directory()
    {
        return $this->json->directory;
    }

    public function libraries()
    {
        $libraries = [];

        foreach ($this->json->libraries as $library) {
            $libraries[] = new JsonLibrary($library);
        }

        return $libraries;
    }
}