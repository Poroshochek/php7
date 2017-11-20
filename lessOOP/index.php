<?php
require_once 'FileLogger.php';


class FileLoggerDebug extends FileLogger
{
    public function __construct($name, $fname)
    {
        parent::__construct(basename($fname), $fname);
    }

    public function debug($s, $level = 0)
    {
        $stack = debug_backtrace();
        $file = basename($stack[$level]['file']);
        $line = $stack[$level]['line'];
        $this->log("[at $file line $line] $s");
    }
}

$logger = new FileLoggerDebug("test", "test.log");
$logger->log("Some message");
$logger->debug("Debug message");

?>