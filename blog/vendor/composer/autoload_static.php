<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb843ea85e8e1cf4fe29b9d2c742f9530
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gjun\\Blog\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gjun\\Blog\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb843ea85e8e1cf4fe29b9d2c742f9530::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb843ea85e8e1cf4fe29b9d2c742f9530::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb843ea85e8e1cf4fe29b9d2c742f9530::$classMap;

        }, null, ClassLoader::class);
    }
}