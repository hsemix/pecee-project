<?php

use \Pecee\Translation;

/* ---------- Configuration start ---------- */

// Example usage: Registry
// $key = \Pecee\Registry::getInstance();
// $key->set('StuffToSave', 'ValueToRetrieve');

// Set the framework to use XML for language
Translation::getInstance()->setType(Translation::TYPE_XML);


// ---- DATABASE SETTINGS ----

$app['db'] = array(
    'driver'    => env('DB_DRIVER'),
    'host'      => env('DB_HOST'),
    'database'  => env('DB_DATABASE'),
    'username'  => env('DB_USERNAME'),
    'password'  => env('DB_PASSWORD'),
    'charset'   => 'utf8', // Optional
    'collation' => 'utf8_unicode_ci', // Optional
    'prefix'    => '', // Table prefix, optional
);

/* ---------- Configuration end ---------- */
