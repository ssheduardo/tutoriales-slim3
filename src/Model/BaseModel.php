<?php

namespace App\Model;

abstract class BaseModel
{
	protected $container;

	public function __construct($container)
	{
		$this->container = $container;
	}

	public function __get($property)
	{
		if($this->container->{$property}) {
			return $this->container->{$property};
		}
	}

	abstract public function getSource();

	public function select($columns, $where=[])
    {
        return $this->container->db->select($this->getSource(), $columns, $where);
    }

	public function insert($data = [])
    {
        return $this->db->insert($this->getSource(), $data);
    }

    public function update($data = [], $where = [])
    {
        if (empty($where)) {
            return 0;
        }
        return $this->db->update($this->getSource(), $data, $where);
    }

    public function delete($where)
    {
        if (empty($where)) {
            return 0;
        }
        return $this->db->delete($this->getSource(), $where);
    }
}