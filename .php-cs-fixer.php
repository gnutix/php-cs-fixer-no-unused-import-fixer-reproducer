<?php

return (new PhpCsFixer\Config())
    ->setRules(['no_unused_imports' => true])
    ->setFinder((new PhpCsFixer\Finder())->in(__DIR__ . '/tests'));
