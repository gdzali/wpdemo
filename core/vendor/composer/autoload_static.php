<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d6fd649c816490c94942e92ebdb579b
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'StoutLogic\\AcfBuilder\\' => 22,
        ),
        'D' => 
        array (
            'Doctrine\\Inflector\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'StoutLogic\\AcfBuilder\\' => 
        array (
            0 => __DIR__ . '/..' . '/stoutlogic/acf-builder/src',
        ),
        'Doctrine\\Inflector\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/inflector/lib/Doctrine/Inflector',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7d6fd649c816490c94942e92ebdb579b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7d6fd649c816490c94942e92ebdb579b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7d6fd649c816490c94942e92ebdb579b::$classMap;

        }, null, ClassLoader::class);
    }
}
