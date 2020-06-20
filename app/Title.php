<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends ReadOnlyBase
{
    protected $titles_arr = ["Mr.", "Mrs.", "Ms.", "Dr.", "Mx."];
}
