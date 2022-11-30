<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInited13037e1b2e27353543329475d1cf0f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Staditek\\App\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Staditek\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Staditek\\App\\Config\\Database' => __DIR__ . '/../..' . '/App/Config/Database.php',
        'Staditek\\App\\Controller\\HomeController' => __DIR__ . '/../..' . '/App/Controller/HomeController.php',
        'Staditek\\App\\Core\\Router' => __DIR__ . '/../..' . '/App/Core/Router.php',
        'Staditek\\App\\Model\\UserModel' => __DIR__ . '/../..' . '/App/Model/UserModel.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInited13037e1b2e27353543329475d1cf0f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInited13037e1b2e27353543329475d1cf0f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInited13037e1b2e27353543329475d1cf0f::$classMap;

        }, null, ClassLoader::class);
    }
}