<?php
/**
 * Created by PhpStorm.
 * User: teliov
 * Date: 8/4/15
 * Time: 6:26 PM
 */

namespace Whatsapp\ChatApi;


interface MessageStoreInterface
{
    public function saveMessage($from, $to, $txt, $id, $t);
}