<?php

namespace App\MyLog;

use DateTime;

class FileLogger implements LoggerInterface
{
    private string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function log(LogLevel $level, string $message, array $data = []): void
    {
        $timestamp = (new DateTime())->format('Y-m-d H:i:s');
        $formattedData = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        $logLine = "$timestamp | {$level->value}: [$message] [$formattedData]" . PHP_EOL;

        file_put_contents($this->filePath, $logLine, FILE_APPEND);
    }
}