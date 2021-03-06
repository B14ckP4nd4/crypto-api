<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf30702b949b4418547d8429a1547fd64
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Blackpanda\\CryptoApi\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Blackpanda\\CryptoApi\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf30702b949b4418547d8429a1547fd64::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf30702b949b4418547d8429a1547fd64::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf30702b949b4418547d8429a1547fd64::$classMap;

        }, null, ClassLoader::class);
    }
}
