<?php

namespace Blog\V1\Rest\Post;

use ZfcBase\Mapper\AbstractDbMapper;
use Zend\Paginator\Adapter\DbSelect;

class PostMapper extends AbstractDbMapper
{
    protected $tableName = 'Post';

    public function findAll($userId)
    {
        $select = $this->getSelect();
        $select->where(array('userId' => $userId));

        $adapter = $this->getDbAdapter();
        $paginatorAdapter = new DbSelect($select, $adapter);
        $collection = new PostCollection($paginatorAdapter);

        return $collection;
    }

    public function findById($userId, $postId)
    {
        $select = $this->getSelect();
        $select->where(array(
            'userId' => $userId,
            'postId' => $postId,
        ));

        $postEntity = $this->select($select)->current();

        return $postEntity;
    }

    public function insert($postEntity)
    {
        $result = parent::insert($postEntity);
        $postEntity->setPostId($result->getGeneratedValue());
    }

    public function update($postEntity)
    {
        return parent::update($postEntity, array(
            'userId' => $postEntity->getUserId(),
            'postId' => $postEntity->getPostId(),
        ))->getAffectedRows();
    }

    public function delete($userId, $postId)
    {
        return parent::delete(array(
            'userId' => $userId,
            'postId' => $postId,
        ))->getAffectedRows();
    }


    /**
     * Gets the value of tableName.
     *
     * @return mixed
     */
    public function getTableName()
    {
        return $this->tableName;
    }
    
    /**
     * Sets the value of tableName.
     *
     * @param mixed $tableName the table name
     *
     * @return self
     */
    public function setTableName($tableName)
    {
        $this->tableName = $tableName;

        return $this;
    }
}
