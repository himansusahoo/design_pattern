<?php
class FileLogger extends Logger
{

    protected function writeMessage(string $msg)
    {
        echo "Writing to a log file: $msg<br>";
    }

}