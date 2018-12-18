<?php
use SebastianBergmann\CodeCoverage\CodeCoverage;

$coverage = new CodeCoverage;

$coverage->filter()->addDirectoryToWhitelist('/path/to/src');

$coverage->start('<name of test>');

// ...

$coverage->stop();

$writer = new \SebastianBergmann\CodeCoverage\Report\Clover;
$writer->process($coverage, '/tmp/clover.xml');

$writer = new \SebastianBergmann\CodeCoverage\Report\Html\Facade;
$writer->process($coverage, '/tmp/code-coverage-report');

?>