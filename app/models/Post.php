<?php

class Post extends Eloquent{

	protected $table = 'posts';
	protected $fillable = ['title'];

	public static $rules = array(
		'title'  => 'required|mix:30',
		'blog'   =>'required'
		
	);
   

}