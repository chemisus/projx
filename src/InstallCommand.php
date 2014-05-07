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
        foreach ($configuration->libraries() as $library) {
            $directory = $configuration->directory() . '/' . $library->name();

            if (!is_dir($directory)) {
                mkdir($directory, 0777, true);

                `cd {$directory};
                git init;
                git remote add origin {$library->repository()};
                git pull origin {$library->version()};
                git checkout {$library->version()}`;
            }
        }
    }
}
