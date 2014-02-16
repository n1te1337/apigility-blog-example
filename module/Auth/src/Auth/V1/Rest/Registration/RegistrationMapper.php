<?php

namespace Auth\V1\Rest\Registration;

use ZfcBase\Mapper\AbstractDbMapper;

class RegistrationMapper extends AbstractDbMapper
{
	protected $tableName = 'oauth_users';

	public function insert($registrationEntity)
	{
		return parent::insert($registrationEntity)->getAffectedRows();
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
