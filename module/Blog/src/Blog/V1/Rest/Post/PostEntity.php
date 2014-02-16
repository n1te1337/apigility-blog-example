<?php
namespace Blog\V1\Rest\Post;

class PostEntity
{
    protected $postId;
    protected $postTitle;
    protected $postBody;
    protected $postDate;
    protected $userId;

    /**
     * Gets the value of postId.
     *
     * @return mixed
     */
    public function getPostId()
    {
        return $this->postId;
    }
    
    /**
     * Sets the value of postId.
     *
     * @param mixed $postId the post id
     *
     * @return self
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * Gets the value of postTitke.
     *
     * @return mixed
     */
    public function getPostTitle()
    {
        return $this->postTitle;
    }
    
    /**
     * Sets the value of postTitke.
     *
     * @param mixed $postTitke the post titke
     *
     * @return self
     */
    public function setPostTitle($postTitle)
    {
        $this->postTitle = $postTitle;

        return $this;
    }

    /**
     * Gets the value of postBody.
     *
     * @return mixed
     */
    public function getPostBody()
    {
        return $this->postBody;
    }
    
    /**
     * Sets the value of postBody.
     *
     * @param mixed $postBody the post body
     *
     * @return self
     */
    public function setPostBody($postBody)
    {
        $this->postBody = $postBody;

        return $this;
    }

    /**
     * Gets the value of postDate.
     *
     * @return mixed
     */
    public function getPostDate()
    {
        return $this->postDate;
    }
    
    /**
     * Sets the value of postDate.
     *
     * @param mixed $postDate the post date
     *
     * @return self
     */
    public function setPostDate($postDate)
    {
        $this->postDate = $postDate;

        return $this;
    }

    /**
     * Gets the value of userId.
     *
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }
    
    /**
     * Sets the value of userId.
     *
     * @param mixed $userId the user id
     *
     * @return self
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }
}
