<?php

class Subject extends Eloquent{
	protected $gaurded = [];
	private $timestamps = false;
	
	public function user()
	{
		return $this->belongsTo('User');
	}
}