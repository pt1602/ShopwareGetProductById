<?php

require 'vendor/autoload.php';

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->in(__DIR__ . '/../src');

return K10r\Codestyle\PHP80::create($finder, [
    'yoda_style' => true,
]);
