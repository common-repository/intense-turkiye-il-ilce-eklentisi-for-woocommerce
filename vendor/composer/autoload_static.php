<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78fc6ab7c5215e1ca7223ebf46f0ae55
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WP_Dismiss_Notice' => __DIR__ . '/..' . '/afragen/wp-dismiss-notice/wp-dismiss-notice.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit78fc6ab7c5215e1ca7223ebf46f0ae55::$classMap;

        }, null, ClassLoader::class);
    }
}