<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd15afe3dcf537bd8660ea24039aa3310
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitd15afe3dcf537bd8660ea24039aa3310', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd15afe3dcf537bd8660ea24039aa3310', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd15afe3dcf537bd8660ea24039aa3310::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
