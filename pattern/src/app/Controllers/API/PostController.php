<?php

namespace Zylo\Pattern\App\Controllers\API;


use Zylo\Pattern\App\Models\Post;

use Illuminate\Http\Request;
use Zylo\Pattern\App\Repositories\PostRepository;
use Zylo\Pattern\App\Controllers\StabilityController;
use Zylo\Pattern\App\Request\PostRequestStore;
use Zylo\Pattern\App\Resource\PostResource;
use Zylo\Pattern\App\Resource\PostCollection;

class PostController extends StabilityController
{

    public function __construct()
    {
       $this->Repository = new PostRepository(new Post());
    }


    public function index()
    {   
    
       return $this->api_Response(new PostCollection($this->Repository->ListAll()));
    }


    public function store(PostRequestStore $request)
    {
       return $this->api_Response($this->Repository->create($request->all()),201);
    }

    
    public function show($id)
    {     
      return $this->api_Response(new PostResource($this->Repository->find($id)));
    }


    public function update(PostRequestStore $input, $id)
    {
         return $this->api_Response($this->Repository->update($id,$input->all()));
    }


    public function destroy($id)
    {
         return $this->api_Response($this->Repository->remove($id));
    }

    
}
