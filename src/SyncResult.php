<?php
/**
 * Created by PhpStorm.
 * User: teliov
 * Date: 8/4/15
 * Time: 6:39 PM
 */

namespace Whatsapp\ChatApi;


class SyncResult
{
    public $index;
    public $syncId;
    /** @var array $existing */
    public $existing;
    /** @var array $nonExisting */
    public $nonExisting;

    public function __construct($index, $syncId, $existing, $nonExisting)
    {
        $this->index = $index;
        $this->syncId = $syncId;
        $this->existing = $existing;
        $this->nonExisting = $nonExisting;
    }
}