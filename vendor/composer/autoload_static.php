<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit464926852a78f4c389e60da2f1effea2
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SOLID\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SOLID\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Principles',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit464926852a78f4c389e60da2f1effea2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit464926852a78f4c389e60da2f1effea2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit464926852a78f4c389e60da2f1effea2::$classMap;

        }, null, ClassLoader::class);
    }
}
