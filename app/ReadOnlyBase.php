<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReadOnlyBase
{
    protected $titles_arr = [];

    public function all(){
        return $this->titles_arr;
    }

    public function get($id){
        return $this->titles_arr[$id];
    }
}
