<?php
/**
 * Created by PhpStorm.
 * User: teliov
 * Date: 8/4/15
 * Time: 6:17 PM
 */

namespace Whatsapp\ChatApi\Exceptions;


abstract class IncompleteMessageException extends CustomException
{
    private $input;

    public function __construct($message = null, $code = 0)
    {
        parent::__construct($message, $code);
    }

    public function setInput($input)
    {
        $this->input = $input;
    }

    public function getInput()
    {
        return $this->input;
    }
}