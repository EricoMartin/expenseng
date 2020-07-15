<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model {
	protected $guarded = array();

	public static $rules = array(
		'body' => 'required'
	);

	public function tags() {
		return $this->belongsToMany('Tag');
	}
}
?>