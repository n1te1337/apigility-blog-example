<?php

namespace Auth\Service;

use Zend\ServiceManager\ServiceManagerAwareInterface;
use Zend\ServiceManager\ServiceManager;

class AuthService implements ServiceManagerAwareInterface
{
	public function getToken()
	{
		$sm = $this->getServiceManager();
		$config = $sm->get('Configuration');
		$request = $sm->get('Request');

		if ($request->getPost('access_token')) {
			$accessToken = $request->getQuery('access_token');
		} else {
			list($tokenType, $accessToken) = explode(' ', $request->getServer()->HTTP_AUTHORIZATION);
		}

		$storage = $config['zf-oauth2']['storage'];

		$token = $sm->get($storage)->getAccessToken($accessToken);
		$token = (object) $token;

		return $token;
	}

	public function getServiceManager()
	{
		return $this->serviceManager;
	}

	public function setServiceManager(ServiceManager $serviceManager)
	{
		$this->serviceManager = $serviceManager;
		return $this;
	}
}
