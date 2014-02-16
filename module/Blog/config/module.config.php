<?php
return array(
    'router' => array(
        'routes' => array(
            'blog.rest.post' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/post[/:postId]',
                    'defaults' => array(
                        'controller' => 'Blog\\V1\\Rest\\Post\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'blog.rest.post',
        ),
    ),
    'zf-rest' => array(
        'Blog\\V1\\Rest\\Post\\Controller' => array(
            'listener' => 'Blog\\V1\\Rest\\Post\\PostResource',
            'route_name' => 'blog.rest.post',
            'route_identifier_name' => 'postId',
            'collection_name' => 'post',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PUT',
                2 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => '5',
            'page_size_param' => 'page_size',
            'entity_class' => 'Blog\\V1\\Rest\\Post\\PostEntity',
            'collection_class' => 'Blog\\V1\\Rest\\Post\\PostCollection',
            'service_name' => 'Post',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Blog\\V1\\Rest\\Post\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'Blog\\V1\\Rest\\Post\\Controller' => array(
                0 => 'application/vnd.blog.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'Blog\\V1\\Rest\\Post\\Controller' => array(
                0 => 'application/vnd.blog.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Blog\\V1\\Rest\\Post\\PostEntity' => array(
                'entity_identifier_name' => 'postId',
                'route_name' => 'blog.rest.post',
                'route_identifier_name' => 'postId',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ClassMethods',
            ),
            'Blog\\V1\\Rest\\Post\\PostCollection' => array(
                'entity_identifier_name' => 'postId',
                'route_name' => 'blog.rest.post',
                'route_identifier_name' => 'postId',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-content-validation' => array(
        'Blog\\V1\\Rest\\Post\\Controller' => array(
            'input_filter' => 'Blog\\V1\\Rest\\Post\\Validator',
        ),
    ),
    'input_filters' => array(
        'Blog\\V1\\Rest\\Post\\Validator' => array(
            0 => array(
                'name' => 'postId',
                'required' => false,
                'filters' => array(),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\Int',
                        'options' => array(),
                    ),
                ),
                'allow_empty' => true,
                'continue_if_empty' => true,
            ),
            1 => array(
                'name' => 'postTitle',
                'required' => true,
                'filters' => array(),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '140',
                        ),
                    ),
                ),
                'allow_empty' => false,
                'continue_if_empty' => false,
            ),
            2 => array(
                'name' => 'postBody',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
                'allow_empty' => true,
                'continue_if_empty' => true,
            ),
            3 => array(
                'name' => 'postDate',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
                'allow_empty' => true,
                'continue_if_empty' => true,
            ),
            4 => array(
                'name' => 'userId',
                'required' => false,
                'filters' => array(),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\Int',
                        'options' => array(),
                    ),
                ),
                'allow_empty' => true,
                'continue_if_empty' => true,
            ),
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'Blog\\V1\\Rest\\Post\\Controller' => array(
                'resource' => array(
                    'GET' => true,
                    'POST' => true,
                    'PATCH' => true,
                    'PUT' => true,
                    'DELETE' => true,
                ),
                'collection' => array(
                    'GET' => true,
                    'POST' => true,
                    'PATCH' => false,
                    'PUT' => false,
                    'DELETE' => false,
                ),
            ),
        ),
    ),
);
