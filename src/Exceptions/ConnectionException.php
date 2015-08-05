<?php
/**
 * Created by PhpStorm.
 * User: teliov
 * Date: 8/4/15
 * Time: 6:05 PM
 */

namespace Whatsapp\ChatApi\Exceptions;


/*
 * Exception occurs when we have no active socket
 * connection to whatsapp
 */
class ConnectionException extends \Exception{}