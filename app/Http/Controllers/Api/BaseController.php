<?php

namespace App\Http\Controllers\API;


use Illuminate\Http\Request;

use App\Http\Controllers\Controller as Controller;
use LDAP\Result;

class BaseController extends Controller

{
    /**
     * success response method.
     * 
     * @return \illuminate\Http\Response
     * 
     */

     public function sendResponse($result, $message)

     {

        $response = [

            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];

        return response()->json($response, 200);
     }

     /**
      * retun error response.
      *
      * @return \illuminate\Http\Response
      *
      */
    
    public function sendError($error, $errorMessages = [], $code = 404)

    {

        $response = [
            'success' => false,
            'message' => $error,
        ];

        if(!empty($errorMessages)){

            $response['data'] = $errorMessages;

        }

        return response()->json($response, $code);
        
    }
}
?>