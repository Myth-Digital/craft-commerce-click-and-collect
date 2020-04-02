<?php

namespace mediabeastnz\ClickAndCollect\events;

use craft\commerce\elements\Order;
use craft\events\CancelableEvent;

/**
 * Class PickupMethodMatchOrderEvent
 *
 */
class PickupMethodMatchOrderEvent extends CancelableEvent
{
    // Properties
    // =========================================================================

    /**
     * @var Order The order being matched.
     */
    public $order;
}
