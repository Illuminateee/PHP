<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd00699b1631eaecfedd89fc4a0436b78
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OOP\\App\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OOP\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'OOP\\App\\Database' => __DIR__ . '/../..' . '/App/Database.php',
        'OOP\\App\\TrxHeader' => __DIR__ . '/../..' . '/App/TrxHeader.php',
        'OOP\\App\\TrxHeaderController' => __DIR__ . '/../..' . '/App/TrxHeaderController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd00699b1631eaecfedd89fc4a0436b78::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd00699b1631eaecfedd89fc4a0436b78::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd00699b1631eaecfedd89fc4a0436b78::$classMap;

        }, null, ClassLoader::class);
    }
}
