<?php

$finder = \PhpCsFixer\Finder::create()
    ->in([
        __DIR__,
    ])
    ->exclude([
		'bootstrap',
		'storage',
		'vendor',
		'public',
		'database',
		'tests',
		'config',
		'phpdocker',
		'resources'
	])
    ->name('*.php')
    ->name('_ide_helper')
    ->notName('*.blade.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

	$config = new \PhpCsFixer\Config();
	return $config->setRules([
		'@PSR2' => true,
		'array_syntax' => ['syntax' => 'short'],
		'ordered_imports' => ['sort_algorithm' => 'alpha'],
		'no_unused_imports' => true,
	])
	->setUsingCache(false)
	->setFinder($finder);
