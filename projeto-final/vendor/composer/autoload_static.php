<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5d5be4b183d2fd66afabb0f0e0d72a67
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5d5be4b183d2fd66afabb0f0e0d72a67::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5d5be4b183d2fd66afabb0f0e0d72a67::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5d5be4b183d2fd66afabb0f0e0d72a67::$classMap;

        }, null, ClassLoader::class);
    }
}