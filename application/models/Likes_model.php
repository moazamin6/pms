<?php

class Likes_model extends Crud_model
{

	private $table = NULL;

	function __construct()
	{
		$this->table = 'likes';
		parent::__construct($this->table);
	}

}
