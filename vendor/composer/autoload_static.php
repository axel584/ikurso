<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd82b094a355f00606a952861856aafdd
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd82b094a355f00606a952861856aafdd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd82b094a355f00606a952861856aafdd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd82b094a355f00606a952861856aafdd::$classMap;

        }, null, ClassLoader::class);
    }
}
