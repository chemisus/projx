<?php

class Projx
{
    private $configuration;
    private $commands;

    /**
     * @param Configuration $configuration
     * @param Command[] $commands
     */
    public function __construct(Configuration $configuration, array $commands)
    {
        $this->configuration = $configuration;
        $this->commands = $commands;
    }

    /**
     * @param string[] $arguments
     * @throws Exception
     */
    public function run(array $arguments)
    {
        $file = array_shift($arguments);

        $command = array_shift($arguments);

        if (!isset($this->commands[$command])) {
            throw new Exception('Command does not exist');
        }

        $this->commands[$command]->execute($this->configuration, $arguments);
    }
}