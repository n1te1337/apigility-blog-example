<?php

namespace Blog\V1\Rest\Post;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class PostServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceManager)
    {
        $mapper = new PostMapper;
        $mapper->setDbAdapter($serviceManager->get('Zend\Db\Adapter\Adapter'));
        $mapper->setEntityPrototype($serviceManager->get('Blog\V1\Post\PostEntity'));
        $mapper->getHydrator()->setUnderscoreSeparatedKeys(false);
        
        $service = new PostService();
        $service->setMapper($mapper);

        return $service;
    }
}