<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b668139f8a116fd04de6775d426b0f3
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LSVH\\WordPress\\Plugin\\UserClassification\\' => 41,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LSVH\\WordPress\\Plugin\\UserClassification\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b668139f8a116fd04de6775d426b0f3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b668139f8a116fd04de6775d426b0f3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4b668139f8a116fd04de6775d426b0f3::$classMap;

        }, null, ClassLoader::class);
    }
}
