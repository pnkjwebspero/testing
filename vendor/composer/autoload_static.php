<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf406e9a9b21a39df107e345057a260af
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Tprwt\\Testing\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tprwt\\Testing\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf406e9a9b21a39df107e345057a260af::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf406e9a9b21a39df107e345057a260af::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf406e9a9b21a39df107e345057a260af::$classMap;

        }, null, ClassLoader::class);
    }
}
