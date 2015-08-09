<?php

use Whatsapp\ChatApi\WhatsProt;
use Whatsapp\ChatApi\ProtocolNode;


/**
 * Used to expose protected methods to the testing framework.
 */
class TestWhatsProt extends WhatsProt {
    public function processInboundDataNode(ProtocolNode $node) {
        parent::processInboundDataNode($node);
    }
}
