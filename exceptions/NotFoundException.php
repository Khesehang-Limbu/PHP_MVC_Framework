<?php
namespace app\core\exceptions;

class NotFoundException extends \Exception{
    protected $code = 404;
    protected $message = "The Url Not Found, Please Enter A Valid One";
}
