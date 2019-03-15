<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit225463ef6fce0929b2ea6447459be322
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit225463ef6fce0929b2ea6447459be322', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit225463ef6fce0929b2ea6447459be322', 'loadClassLoader'));

        $map = require __DIR__ . '/autoload_namespaces.php';
        // var_dump($map);exit();
        foreach ($map as $namespace => $path) {
            $loader->set($namespace, $path);
        }

        $map = require __DIR__ . '/autoload_psr4.php';
        foreach ($map as $namespace => $path) {
            $loader->setPsr4($namespace, $path);
        }

        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        $loader->register(true);

        $includeFiles = require __DIR__ . '/autoload_files.php';
        foreach ($includeFiles as $file) {
            composerRequire225463ef6fce0929b2ea6447459be322($file);
        }

        return $loader;
    }
}

function composerRequire225463ef6fce0929b2ea6447459be322($file)
{
    require $file;
}