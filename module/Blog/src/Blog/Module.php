<?php
namespace Blog;

use ZF\Apigility\Provider\ApigilityProviderInterface;

class Module implements ApigilityProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'ZF\Apigility\Autoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__,
                ),
            ),
        );
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'Blog\V1\PostService' => 'Blog\V1\Rest\Post\PostServiceFactory',
                'Blog\V1\Rest\Post\PostResource' => function($sm) {
                    return new \Blog\V1\Rest\Post\PostResource($sm);
                },
            ),
            'invokables' => array(
                'Blog\V1\Post\PostEntity' => 'Blog\V1\Rest\Post\PostEntity',
            )
        );
    }

    public function getHydratorConfig()
    {
        return array(
            'factories' => array(
                'Zend\Stdlib\Hydrator\ClassMethods' => function($sm) {
                    return new \Zend\Stdlib\Hydrator\ClassMethods(false);
                },
            ),
        );
    }
}
