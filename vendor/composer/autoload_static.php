<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb6ed07bbcfc516033464ae0e4a7b639b
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb6ed07bbcfc516033464ae0e4a7b639b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb6ed07bbcfc516033464ae0e4a7b639b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}