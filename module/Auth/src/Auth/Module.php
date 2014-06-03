<?php
namespace Auth;

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
                'Auth\V1\Rest\Registration\RegistrationResource' => function($sm) {
                    return new \Auth\V1\Rest\Registration\RegistrationResource($sm);
                },
            ),
            'invokables' => array(
                'Auth\V1\Registration\RegistrationEntity' => 'Auth\V1\Rest\Registration\RegistrationEntity',
            )
        );
    }

    public function getControllerConfig()
    {

    }
}
