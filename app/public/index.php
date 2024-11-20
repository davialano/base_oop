<?php

use App\MyLog\FileLogger;
use App\MyLog\Logger;
use App\MyLog\LogLevel;

require_once 'MyLog/LogLevel.php';
require_once 'MyLog/LoggerInterface.php';
require_once 'MyLog/FileLogger.php';
require_once 'MyLog/Logger.php';

$logger = new Logger(new FileLogger('./logs.txt'));

$logger->log(level: LogLevel::alert, message: 'Message 1', data: ['data1' => 1, 'data2' => 2]);
$logger->log(level: LogLevel::danger, message: 'Message 2', data: ['data3' => 3, 'data4' => 4]);
$logger->log(level: LogLevel::log, message: 'Message 3', data: ['data5' => 5, 'data6' => 6]);
