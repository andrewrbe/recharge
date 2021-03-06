<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit56f40af39063606587cc366952989680
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Recharge\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Recharge\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Recharge',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit56f40af39063606587cc366952989680::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit56f40af39063606587cc366952989680::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit56f40af39063606587cc366952989680::$classMap;

        }, null, ClassLoader::class);
    }
}
