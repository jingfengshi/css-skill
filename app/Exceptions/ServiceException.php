<?php
/**
 * Created by
 * Author:JasperJing 240023810@qq.com
 * Date:2020/4/24
 * Time:16:42
 */

namespace App\Exceptions;




class ServiceException extends \Exception
{

    public function __construct(string $message, int $code = 500)
    {

        parent::__construct($message, $code);
    }

    public function report()
    {
       logger('aaaaa');

    }


    public function render()
    {
        return 1;
        return response()->json(['status' => 'error', 'code' => $this->code, 'message' => $this->message], 200);
    }

}
