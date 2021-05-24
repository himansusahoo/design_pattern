<?php

class EmailLogger extends Logger
{

    protected function writeMessage(string $msg)
    {
        echo "Sending via email: $msg<br>";
    }

}
