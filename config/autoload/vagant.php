<?php
return array(
    'zf-oauth2' => array(
        'storage' => 'ZF\\OAuth2\\Adapter\\PdoAdapter',
        'db' => array(
            'dsn' => 'mysql:host=localhost;dbname=vagrant',
            'username' => 'vagrant',
            'password' => 'vagrant',
        ),
    ),
);
