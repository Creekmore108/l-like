<?php

namespace Creekmore108\LBlock\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Creekmore108\LLike\LLike;

class User extends Authenticatable
{
    use LLike;

    public $timestamps = false;

    // this model is only to be used for running tests
}
