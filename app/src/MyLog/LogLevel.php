<?php

namespace App\MyLog;

enum LogLevel: string {
    case log = 'log';
    case alert = 'alert';
    case danger = 'danger';
}