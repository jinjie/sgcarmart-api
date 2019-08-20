<?php

/**
 * Listings
 *
 * @package SwiftDevLabs\SgCarMart
 * @author Kong Jin Jie <jinjie@swiftdev.sg>
 */

namespace SwiftDevLabs\SgCarMart;

use SwiftDevLabs\SgCarMart\Response;

class Listings extends Response
{
    public function getCars()
    {
        return $this->data->cars->car;
    }
}
