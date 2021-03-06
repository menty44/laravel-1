<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd412842dba7396a3cce60a4743982399
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Safaricom\\Mpesa\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Safaricom\\Mpesa\\' => 
        array (
            0 => __DIR__ . '/..' . '/safaricom/mpesa/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd412842dba7396a3cce60a4743982399::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd412842dba7396a3cce60a4743982399::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
