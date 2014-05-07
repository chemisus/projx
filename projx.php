<?php

spl_autoload_register(function ($classname) {
    $file = 'src/' . str_replace('\\', '/', $classname) . '.php';

    require_once($file);
});

/**
 * @param string[] $arguments
 */
function main(array $arguments)
{
    $projx = new Projx(
        new Configuration(json_decode('' .
            '{' .
            '"directory":"lib",' .
            '"libraries":[' .
            '{"name":"chemisus/snuggie", "version": "master", "repository": "http://github.com/chemisus/snuggie"}' .
            ']' .
            '}' .
            '')),
        [
            'install' => new InstallCommand(),
        ]
    );

    $projx->run($arguments);
}

main($argv, $argc);
