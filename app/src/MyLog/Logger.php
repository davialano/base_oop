<?php

namespace App\MyLog;

class Logger
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function log(LogLevel $level, string $message, array $data = []): void
    {
        $this->logger->log($level, $message, $data);
    }
}