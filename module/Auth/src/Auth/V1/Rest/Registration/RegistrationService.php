<?php

namespace Auth\V1\Rest\Registration;

use Zend\ServiceManager\ServiceManager;
use Zend\ServiceManager\ServiceManagerAwareInterface;
use Zend\Crypt\Password\Bcrypt;

class RegistrationService implements ServiceManagerAwareInterface
{
	protected $serviceManager;
	protected $mapper;

	public function processRegistration($data) 
	{
        $bcrypt = new Bcrypt();
        $data->password = $bcrypt->create($data->password);

        $registerEntity = new RegistrationEntity();
        $this->getMapper()->getHydrator()->hydrate((array)$data, $registerEntity);

        return $this->getMapper()->insert($registerEntity);
	}

    /**
     * Gets the value of serviceManager.
     *
     * @return mixed
     */
    public function getServiceManager()
    {
        return $this->serviceManager;
    }
    
    /**
     * Sets the value of serviceManager.
     *
     * @param mixed $serviceManager the service manager
     *
     * @return self
     */
    public function setServiceManager(ServiceManager $serviceManager)
    {
        $this->serviceManager = $serviceManager;

        return $this;
    }

    /**
     * Gets the value of mapper.
     *
     * @return mixed
     */
    public function getMapper()
    {
        return $this->mapper;
    }
    
    /**
     * Sets the value of mapper.
     *
     * @param mixed $mapper the mapper
     *
     * @return self
     */
    public function setMapper($mapper)
    {
        $this->mapper = $mapper;

        return $this;
    }
}
