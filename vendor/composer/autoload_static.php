<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf77ef9e0cc2605505e8ffd6561b1017
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf77ef9e0cc2605505e8ffd6561b1017::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf77ef9e0cc2605505e8ffd6561b1017::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbf77ef9e0cc2605505e8ffd6561b1017::$classMap;

        }, null, ClassLoader::class);
    }
}
