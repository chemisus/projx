<?php

class LibrariesConfiguration
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

    /**
     * @return LibraryResourceConfiguration[]
     */
    public function resources()
    {
        $resources = array();

        foreach ($this->json->resources as $resource) {
            $resources[] = new LibraryResourceConfiguration($resource);
        }

        return $resources;
    }
}