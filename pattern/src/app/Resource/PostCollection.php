<?php

namespace  Zylo\Pattern\App\Resource;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    public $collects="Zylo\Pattern\App\Resource\PostResource";

    public function toArray($request)
    {
        return [
            'data' => $this->collection,

            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}