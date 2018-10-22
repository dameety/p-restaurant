<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Utilities\Response as ResponseUtil;

class AjaxController extends Controller
{
    public function sendResponse($result, $message)
    {
        return Response::json(ResponseUtil::makeResponse($message, $result));
    }

    public function sendError($error, $code = 404)
    {
        return Response::json(ResponseUtil::makeError($error), $code);
    }
}
