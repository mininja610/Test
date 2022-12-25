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
    'category_id',
];
    public function get10($limit =10){
        
        return $this->latest()->limit($limit)->paginate($limit);
    }
    public function category(){
        
        return $this->belongsTo(Category::class);
        
    }
}
