<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

use Jenssegers\Mongodb\Eloquent\Model as MongoModel;
class Producto extends MongoModel 
{
    use HasFactory;
}
