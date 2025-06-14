<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0bc4c57b6fc5b50e2a53359c1cbf12c3
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'J' => 
        array (
            'Johan\\Phpmailer\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Johan\\Phpmailer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0bc4c57b6fc5b50e2a53359c1cbf12c3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0bc4c57b6fc5b50e2a53359c1cbf12c3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0bc4c57b6fc5b50e2a53359c1cbf12c3::$classMap;

        }, null, ClassLoader::class);
    }
}
