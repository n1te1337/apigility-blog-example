<?php
return array(
    'router' => array(
        'routes' => array(
            'auth.rest.registration' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/auth/registration[/:registration_id]',
                    'defaults' => array(
                        'controller' => 'Auth\\V1\\Rest\\Registration\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'auth.rest.registration',
        ),
    ),
    'zf-rest' => array(
        'Auth\\V1\\Rest\\Registration\\Controller' => array(
            'listener' => 'Auth\\V1\\Rest\\Registration\\RegistrationResource',
            'route_name' => 'auth.rest.registration',
            'route_identifier_name' => 'registration_id',
            'collection_name' => 'registration',
            'entity_http_methods' => array(),
            'collection_http_methods' => array(
                0 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Auth\\V1\\Rest\\Registration\\RegistrationEntity',
            'collection_class' => 'Auth\\V1\\Rest\\Registration\\RegistrationCollection',
            'service_name' => 'Registration',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Auth\\V1\\Rest\\Registration\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'Auth\\V1\\Rest\\Registration\\Controller' => array(
                0 => 'application/vnd.auth.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'Auth\\V1\\Rest\\Registration\\Controller' => array(
                0 => 'application/vnd.auth.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Auth\\V1\\Rest\\Registration\\RegistrationEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'auth.rest.registration',
                'route_identifier_name' => 'registration_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Auth\\V1\\Rest\\Registration\\RegistrationCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'auth.rest.registration',
                'route_identifier_name' => 'registration_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-content-validation' => array(
        'Auth\\V1\\Rest\\Registration\\Controller' => array(
            'input_filter_specs' => 'Auth\\V1\\Rest\\Registration\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'Auth\\V1\\Rest\\Registration\\Validator' => array(
            0 => array(
                'name' => 'username',
                'required' => true,
                'filters' => array(),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\EmailAddress',
                        'options' => array(),
                    ),
                ),
            ),
            1 => array(
                'name' => 'password',
                'required' => true,
                'filters' => array(),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '6',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'firstname',
                'required' => true,
                'filters' => array(),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\Alpha',
                        'options' => array(),
                    ),
                ),
            ),
            3 => array(
                'name' => 'lastname',
                'required' => true,
                'filters' => array(),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\Alpha',
                        'options' => array(),
                    ),
                ),
            ),
        ),
    ),
);
