--TEST--
phpunit
--ARGS--
--no-configuration
--FILE--
<?php
require __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF_EXTERNAL--
_files/output-cli-usage.txt
