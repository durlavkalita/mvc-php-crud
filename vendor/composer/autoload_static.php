<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8a641491db497f587ff8b13edf5b7422
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8a641491db497f587ff8b13edf5b7422::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8a641491db497f587ff8b13edf5b7422::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8a641491db497f587ff8b13edf5b7422::$classMap;

        }, null, ClassLoader::class);
    }
}
