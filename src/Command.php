<?php

interface Command
{

    /**
     * @param Configuration $configuration
     * @param string[] $arguments
     * @return void
     */
    public function execute(Configuration $configuration, array $arguments);
}
