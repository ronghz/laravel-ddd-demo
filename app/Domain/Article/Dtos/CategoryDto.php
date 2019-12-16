<?php
namespace App\Domain\Article\Dtos;

use Ronghz\LaravelDdd\Framework\Base\DddDto;

class CategoryDto extends DddDto
{
    private $id;
	private $name;
	private $parentId;
	private $createdAt;
	private $updatedAt;
	private $deletedAt;

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		return $this->id = $id;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		return $this->name = $name;
	}

	public function getParentId()
	{
		return $this->parentId;
	}

	public function setParentId($parentId)
	{
		return $this->parentId = $parentId;
	}

	public function getCreatedAt()
	{
		return $this->createdAt;
	}

	public function setCreatedAt($createdAt)
	{
		return $this->createdAt = $createdAt;
	}

	public function getUpdatedAt()
	{
		return $this->updatedAt;
	}

	public function setUpdatedAt($updatedAt)
	{
		return $this->updatedAt = $updatedAt;
	}

	public function getDeletedAt()
	{
		return $this->deletedAt;
	}

	public function setDeletedAt($deletedAt)
	{
		return $this->deletedAt = $deletedAt;
	}

}
