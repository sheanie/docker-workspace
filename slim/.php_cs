<?php
$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->exclude('build')
    ->in(__DIR__)
;

return PhpCsFixer\Config::create()
    ->setRules(array(
        '@PSR2' => true,
        'array_syntax' => array('syntax' => 'short'),
    ))
    ->setFinder($finder)
    ;