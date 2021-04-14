<?php

namespace Zylo\Pattern\App\Repositories;

use Zylo\Pattern\App\Interfaces\IPostRepository;
use Zylo\Pattern\App\Models\Post;
use Illuminate\Support\Collection;

class PostRepository extends BaseRepository implements IPostRepository
{

    public function __construct(Post $model)
    {
        parent::__construct($model);
    }
    

}