<?php

namespace Dragonfly\OrderAreaCreated\Plugin;

use Dragonfly\OrderAreaCreated\Service\Settings;
use Magento\Sales\Api\Data\OrderInterface;
use Magento\Sales\Api\OrderRepositoryInterface;

class OrderRepositoryPluginWebapi
{
    /**
     * @param OrderRepositoryInterface $subject
     * @param OrderInterface $order
     * @return OrderInterface[]
     */
    public function beforeSave(OrderRepositoryInterface $subject, OrderInterface $order)
    {
        $order->setOrderAreaCreated(Settings::AREA_SITE);

        return [$order];
    }
}
