<?php

namespace Zylo\Pattern\App\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class StabilityController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function api_Response($data='data',$code=200,$message='Success')
    {
        $response=['Response'=>$data, 'message'=>$message];
        return response()->json($response,$code);
    }

}
