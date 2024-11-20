<?php

namespace App\MyLog;

interface LoggerInterface
{
    public function log(LogLevel $level, string $message, array $data = []): void;
}