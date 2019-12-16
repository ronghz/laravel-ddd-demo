<?php
namespace App\Domain\Article\Dtos;

use Ronghz\LaravelDdd\Framework\Base\DddDto;

class ArticleDto extends DddDto
{
    private $id;
	private $title;
	private $content;
	private $recommendOrder;
	private $categoryId;
	private $status;
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

	public function getTitle()
	{
		return $this->title;
	}

	public function setTitle($title)
	{
		return $this->title = $title;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setContent($content)
	{
		return $this->content = $content;
	}

	public function getRecommendOrder()
	{
		return $this->recommendOrder;
	}

	public function setRecommendOrder($recommendOrder)
	{
		return $this->recommendOrder = $recommendOrder;
	}

	public function getCategoryId()
	{
		return $this->categoryId;
	}

	public function setCategoryId($categoryId)
	{
		return $this->categoryId = $categoryId;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setStatus($status)
	{
		return $this->status = $status;
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
