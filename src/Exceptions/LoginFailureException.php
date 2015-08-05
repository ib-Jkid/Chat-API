<?php
/**
 * Created by PhpStorm.
 * User: teliov
 * Date: 8/4/15
 * Time: 6:06 PM
 */

namespace Whatsapp\ChatApi\Exceptions;

/*
 * Exception occurs when we have no active socket
 * connection to whatsapp
 */
class LoginFailureException extends \Exception{}