<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit79a5dfb64f68bc4f67071f24499a15e4
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit79a5dfb64f68bc4f67071f24499a15e4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit79a5dfb64f68bc4f67071f24499a15e4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
