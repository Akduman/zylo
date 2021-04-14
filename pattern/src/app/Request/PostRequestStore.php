<?php

namespace Zylo\Pattern\App\Request;

use Illuminate\Foundation\Http\FormRequest;

class PostRequestStore extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return 
        [
            // 'id' => 'Required',
 	 	 	 'title' => 'Required',
 	 	 	 'slug' => 'Required',
 	 	 	 'detail' => 'Required', 
 	 	        
        ];
    }
}