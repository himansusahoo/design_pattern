<?php
class ConsoleLogger extends Logger
{

    protected function writeMessage(string $msg)
    {
        echo "Writing to console: $msg<br>";
    }

}