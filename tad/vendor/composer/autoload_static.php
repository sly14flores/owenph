<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7a07df22632e73f5ff9e746e459dcc82
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Test\\Helpers\\' => 13,
            'TADPHP\\Providers\\' => 17,
            'TADPHP\\Exceptions\\' => 18,
            'TADPHP\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Test\\Helpers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/test/helpers',
        ),
        'TADPHP\\Providers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/Providers',
        ),
        'TADPHP\\Exceptions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/Exceptions',
        ),
        'TADPHP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7a07df22632e73f5ff9e746e459dcc82::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7a07df22632e73f5ff9e746e459dcc82::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
