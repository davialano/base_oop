<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit23e424854e605a0c18eb2d5d79496dd7
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit23e424854e605a0c18eb2d5d79496dd7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit23e424854e605a0c18eb2d5d79496dd7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit23e424854e605a0c18eb2d5d79496dd7::$classMap;

        }, null, ClassLoader::class);
    }
}