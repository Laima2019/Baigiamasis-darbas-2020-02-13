<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit721ae2e2e777bfd38ce3d1bdcea21fcd
{
    public static $prefixLengthsPsr4 = array (
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
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/classes',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit721ae2e2e777bfd38ce3d1bdcea21fcd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit721ae2e2e777bfd38ce3d1bdcea21fcd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
