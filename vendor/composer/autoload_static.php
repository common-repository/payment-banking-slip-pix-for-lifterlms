<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54036d077fa9975d28d25f1c96b73b51
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Picqer\\Barcode\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Picqer\\Barcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/picqer/php-barcode-generator/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit54036d077fa9975d28d25f1c96b73b51::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit54036d077fa9975d28d25f1c96b73b51::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit54036d077fa9975d28d25f1c96b73b51::$classMap;

        }, null, ClassLoader::class);
    }
}
