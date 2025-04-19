<?php

namespace Creekmore108\LBlock\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Creekmore108\LBlock\LBlock;

class User extends Authenticatable
{
    use LBlock;

    public $timestamps = false;

    // this model is only to be used for running tests
}
