<?php
namespace App\Services;

use App\Fields\Store\InputField;
use App\Models\Post;

class PostService extends Service {
    protected $modelClass = Post::class;
    public function getFields()
    {
        
        return [
            InputField::make('name')->required()->max(255),
            InputField::make('slug')->required(),
        ];
    }
}