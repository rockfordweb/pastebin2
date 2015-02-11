<?php

class Paste extends Eloquent {
	protected $table = 'pastes';

    public function user() {
        return $this->belongsTo('User');
    }
}