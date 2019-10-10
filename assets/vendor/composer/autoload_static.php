<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit055fa03e19d2a8f9195757dce9892607
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sts\\' => 4,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/sts',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit055fa03e19d2a8f9195757dce9892607::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit055fa03e19d2a8f9195757dce9892607::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
