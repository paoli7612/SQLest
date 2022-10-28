<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb9fa94d9b5c2e4e085d4db091cd1d698
{
    public static $classMap = array (
        'App\\App' => __DIR__ . '/../..' . '/App/App.php',
        'App\\core\\Database' => __DIR__ . '/../..' . '/App/core/Database.php',
        'App\\core\\Request' => __DIR__ . '/../..' . '/App/core/Request.php',
        'App\\core\\Router' => __DIR__ . '/../..' . '/App/core/Router.php',
        'ComposerAutoloaderInitb9fa94d9b5c2e4e085d4db091cd1d698' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitb9fa94d9b5c2e4e085d4db091cd1d698' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitb9fa94d9b5c2e4e085d4db091cd1d698::$classMap;

        }, null, ClassLoader::class);
    }
}
