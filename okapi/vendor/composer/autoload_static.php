<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1f5a6b1d49350f3ecad525cb482af313
{
    public static $prefixLengthsPsr4 = array (
        'o' =>
        array (
            'okapi\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'okapi\\' =>
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1f5a6b1d49350f3ecad525cb482af313::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1f5a6b1d49350f3ecad525cb482af313::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
