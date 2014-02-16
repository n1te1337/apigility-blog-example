<?php

namespace Blog\V1\Rest\Post;

use Zend\ServiceManager\ServiceManager;
use Zend\ServiceManager\ServiceManagerAwareInterface;

class PostService implements ServiceManagerAwareInterface
{
	protected $serviceManager;
	protected $mapper;

	public function getPosts()
	{
		return $this->getMapper()->findAll($this->getUserId());
	}

    public function getPost($id)
    {
        return $this->getMapper()->findById($this->getUserId(), $id);
    }

	public function savePost($data) 
	{
		$postEntity = new PostEntity();
		$this->getMapper()->getHydrator()->hydrate((array)$data, $postEntity);
		$postEntity->setUserId($this->getUserId());
        
		if (!is_null($postEntity->getPostId())) {
			$this->getMapper()->update($postEntity);
		} else {
			$postEntity->setPostDate(date("Y-m-d H:i:s"));
			$this->getMapper()->insert($postEntity);
		}

		return $postEntity;
	}

    public function deletePost($id)
    {
        return $this->getMapper()->delete($this->getUserId(), $id);
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

    public function getUserId()
    {
    	return $this->getServiceManager()->get('AuthService')->getToken()->user_id;
    }
}
