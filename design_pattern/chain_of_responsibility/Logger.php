<?php
include_once "Logger.abstract.php";
include_once "ConsoleLogger.php";
include_once "EmailLogger.php";
include_once "FileLogger.php";

$logger = new ConsoleLogger(Logger::ALL);
$logger
    ->setNext(new EmailLogger(Logger::FUNCTIONAL_MESSAGE | Logger::FUNCTIONAL_ERROR))
    ->setNext(new FileLogger(Logger::WARNING | Logger::ERROR));

$logger
    // Handled by ConsoleLogger since the console has a loglevel of all
    ->message("Entering function ProcessOrder().", Logger::DEBUG)
    ->message("Order record retrieved.", Logger::INFO)
    // Handled by ConsoleLogger and FileLogger since filelogger implements Warning & Error
    ->message("Customer Address details missing in Branch DataBase.", Logger::WARNING)
    ->message("Customer Address details missing in Organization DataBase.", Logger::ERROR)
    // Handled by ConsoleLogger and EmailLogger as it implements functional error
    ->message("Unable to Process Order ORD1 Dated D1 For Customer C1.", Logger::FUNCTIONAL_ERROR)
    // Handled by ConsoleLogger and EmailLogger
    ->message("Order Dispatched.", Logger::FUNCTIONAL_MESSAGE);