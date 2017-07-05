<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Anagram.php';

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {

        return $app['twig']->render('anagrams.html.twig');
    });

    $app->get('/result', function() use ($app){

        return $app['twig']->render('anagram_results.html.twig')
    });
    return $app;
?>
