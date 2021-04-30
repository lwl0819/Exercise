<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit773305bfa8552d98f378615586b41d0e
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Customers\\' => 10,
            'Cars\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Customers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Customers',
        ),
        'Cars\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Cars',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit773305bfa8552d98f378615586b41d0e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit773305bfa8552d98f378615586b41d0e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit773305bfa8552d98f378615586b41d0e::$classMap;

        }, null, ClassLoader::class);
    }
}
