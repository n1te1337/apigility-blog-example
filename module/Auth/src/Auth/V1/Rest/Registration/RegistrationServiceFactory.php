<?php

namespace Auth\V1\Rest\Registration;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class RegistrationServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceManager)
    {
        $mapper = new RegistrationMapper;
        $mapper->setDbAdapter($serviceManager->get('Zend\Db\Adapter\Adapter'));
        $mapper->setEntityPrototype($serviceManager->get('Auth\V1\Registration\RegistrationEntity'));
        $mapper->getHydrator()->setUnderscoreSeparatedKeys(false);
        
        $service = new RegistrationService();
        $service->setMapper($mapper);

        return $service;
    }
}