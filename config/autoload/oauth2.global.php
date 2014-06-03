<?php
return array(
    'zf-oauth2' => array(
        'db' => array(
            'dsn' => 'mysql:host=localhost;dbname=vagrant',
            'username' => 'vagrant',
            'password' => 'vagrant',
        ),
        'allow_implicit' => false, // default (set to true when you need to support browser-based or mobile apps)
        'access_lifetime' => 3600, // default (set a value in seconds for access tokens lifetime)
        'enforce_state'  => true,  // default
        'storage' => 'ZF\\OAuth2\\Adapter\\PdoAdapter',
    ),
);