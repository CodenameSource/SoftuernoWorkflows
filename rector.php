<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;

return static function (RectorConfig $rectorConfig): void {
    // Specify the directories to be refactored
    $rectorConfig->paths([__DIR__ . '/src']);

    // Optionally, include a set of rules
    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_80
    ]);
};