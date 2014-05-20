<?php

class InstallCommand implements Command
{
    /**
     * @param Configuration $configuration
     * @param string[] $arguments
     * @return void
     */
    public function execute(Configuration $configuration, array $arguments)
    {
        $libraries = $configuration->libraries();

        foreach ($libraries->resources() as $resource) {
            $directory = $libraries->directory() . '/' . $resource->name();

            if (!is_dir($directory)) {
                mkdir($directory, 0777, true);

                `cd {$directory};
                git init;
                git remote add origin {$resource->repository()};
                git pull origin {$resource->version()};
                git checkout {$resource->version()}`;
            }
        }
    }
}
