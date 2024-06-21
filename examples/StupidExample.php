<?php

use Simplicer\Http\Status\Code;

require_once __DIR__ . '/../vendor/autoload.php';

function printHttpStatus($httpStatus)
{
    echo "HTTP Status: $httpStatus\n";
    if (Code::isValidStatusCode($httpStatus)) {
        echo "\tStatus Text: " . Code::getStatusText($httpStatus) . "\n";
        echo "\tStatus Description: " .  Code::getStatusDescription($httpStatus) . "\n";
        echo "\tHeader Text: " .  Code::getHeaderText($httpStatus) . "\n";
        echo "\tComplete Header Text: " .  Code::getHeader($httpStatus) . "\n";
        if (Code::isClientError($httpStatus)) {
            echo "\tStatus Range Type: " .  Code::getStatusRange($httpStatus) . "\n";
        } else {
            echo "\tThis is another error.\n";
        }
    } else {
        echo "\tStatus long description: " .  Code::getStatusDescription($httpStatus) . "\n";
    }
}

$httpStatus = Code::TEAPOT();
printHttpStatus($httpStatus);

$httpStatus = 999;
printHttpStatus($httpStatus);
