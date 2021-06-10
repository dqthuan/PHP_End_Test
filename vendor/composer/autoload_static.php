<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit65741d3b460f60ff688129f7ecc1e0cc
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit65741d3b460f60ff688129f7ecc1e0cc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit65741d3b460f60ff688129f7ecc1e0cc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit65741d3b460f60ff688129f7ecc1e0cc::$classMap;

        }, null, ClassLoader::class);
    }
}
