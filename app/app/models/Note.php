<?php

class Note extends \Eloquent {
	protected $guarded = [];

	public function user()
	{
		return $this->belongsTo('User');
	}
}