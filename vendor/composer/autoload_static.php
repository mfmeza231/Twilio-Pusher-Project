<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2d9cb84cbe375f592b177aee4f98fea5
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Services_Twilio' => 
            array (
                0 => __DIR__ . '/..' . '/twilio/sdk',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit2d9cb84cbe375f592b177aee4f98fea5::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
