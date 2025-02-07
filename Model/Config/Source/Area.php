<?php

namespace Dragonfly\OrderAreaCreated\Model\Config\Source;

use Dragonfly\OrderAreaCreated\Service\Settings;
use Magento\Framework\Option\ArrayInterface;

class Area implements ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        $array = [];

        foreach (Settings::AREA_LIST as $key => $value) {
            $array[] = ['value' => $key, 'label' => __($value)];
        }

        return $array;
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return Settings::AREA_LIST;
    }
}
