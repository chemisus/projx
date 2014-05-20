<?php

class Configuration
{
    private $json;

    public function __construct($json)
    {
        $this->json = $json;
    }

    /**
     * @return LibrariesConfiguration
     */
    public function libraries()
    {
        return new LibrariesConfiguration($this->json->libraries);
    }
}