<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit15679f88960b9f6844053033dd836957
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Relatorios\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Relatorios\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit15679f88960b9f6844053033dd836957::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit15679f88960b9f6844053033dd836957::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit15679f88960b9f6844053033dd836957::$classMap;

        }, null, ClassLoader::class);
    }
}
