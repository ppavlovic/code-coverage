<?php

chdir(dirname(__DIR__));

require_once realpath(join(DIRECTORY_SEPARATOR, ['vendor', 'autoload.php']));

use G4\CodeCoverage\Runner;
use Garden\Cli\Cli;

$cli = new Cli();

$cli->description('Analyze phpunit coverage report.')
    ->opt('file:f', 'Path to phpunit\'s code coverage xml report', true, 'string')
    ->opt('percentage:p', 'Minimum coverage percentage to be considered "highly" covered.', true, 'integer');

$args = $cli->parse($argv, true);

(new Runner($args))->run();