<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{ 
  use SoftDeletes;
    
    protected $fillable = [
    'title',
    'body',
];
    public function get10($limit =10){
        
        return $this->latest()->limit($limit)->paginate($limit);
    }
}
