<?php
/**
 * Services are globally registered in this file
 *
 * @var \Phalcon\Config $config
 */

use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Url as UrlResolver;
use Phalcon\Mvc\View\Engine\Volt as VoltEngine;
use Phalcon\Mvc\Model\Metadata\Memory as MetaDataAdapter;
use Phalcon\Session\Adapter\Files as SessionAdapter;
use Phalcon\Flash\Session as Flash;

/**
 * The FactoryDefault Dependency Injector automatically register the right services providing a full stack framework
 */
$di = new FactoryDefault();

/**
 * The URL component is used to generate all kind of urls in the application
 */
$di->setShared('url', function () use ($config) {
    $url = new UrlResolver();
    $url->setBaseUri($config->application->baseUri);

    return $url;
});

/**
 * Setting up the view component
 */
$di->setShared('view', function () use ($config) {

    $view = new View();

    $view->setViewsDir($config->application->viewsDir);

    $view->registerEngines(array(
        '.volt' => function ($view, $di) use ($config) {

            $volt = new VoltEngine($view, $di);

            $volt->setOptions(array(
                'compiledPath' => $config->application->cacheDir,
                'compiledSeparator' => '_'
            ));

            return $volt;
        },
        '.phtml' => 'Phalcon\Mvc\View\Engine\Php'
    ));

    return $view;
});

/**
 *
 */
$di->setShared("guzzle", function () {
    $guzzle = new GuzzleHttp\Client();
    return $guzzle;
});

/**
 * Database connection is created based in the parameters defined in the configuration file
 */
$di->setShared('db', function () use ($config) {
    $dbConfig = $config->database->toArray();
    $adapter = $dbConfig['adapter'];
    unset($dbConfig['adapter']);

    $class = 'Phalcon\Db\Adapter\Pdo\\' . $adapter;

    return new $class($dbConfig);
});

/**
 * If the configuration specify the use of metadata adapter use it or use memory otherwise
 */
$di->setShared('modelsMetadata', function () {
    return new MetaDataAdapter();
});

/**
 *
 * @var Phalcon
 */
$di->set('pusher', function () {
    $options = array(
        'encrypted' => true
    );

    $pusher = new Pusher(
        'f14f3a3162879b286cd0',
        '228912eb422142237fba',
        '244225',
        $options
    );

    return $pusher;
}, true);

/**
 *
 * @var Phalcon
 */
$di->set('assets', function () {
    $assetsManager = new Phalcon\Assets\Manager();
    $assetsManager->collection("config")->addJs("js/jquery.min.js");
    $assetsManager->collection("config")->addJs("js/bootstrap.min.js");
    $assetsManager->collection("css")->addCss("css/bootstrap.min.css");
    $assetsManager->collection("deal")->addJs("js/pusher.js");
    return $assetsManager;
}, true);

/**
 * Register the session flash service with the Twitter Bootstrap classes
 */
$di->set('flash', function () {
    return new Flash(array(
        'error'   => 'custom-alert alert alert-danger',
        'success' => 'custom-alert alert alert-success',
        'notice'  => 'custom-alert alert alert-info',
        'warning' => 'custom-alert alert alert-warning'
    ));
});

/**
 * Start the session the first time some component request the session service
 */
$di->setShared('session', function () {
    $session = new SessionAdapter();
    $session->start();

    return $session;
});
