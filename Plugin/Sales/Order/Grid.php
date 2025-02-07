<?php

namespace Dragonfly\OrderAreaCreated\Plugin\Sales\Order;

use Magento\Framework\DB\Select;

class Grid
{
    public const TABLE = 'sales_order_grid';
    public const LEFT_JOIN_TABLE = 'sales_order';

    /**
     * @param $intercepter
     * @param $collection
     * @return mixed
     */
    public function afterSearch($intercepter, $collection)
    {
        if ($collection->getMainTable() === $collection->getConnection()->getTableName(self::TABLE)) {
            $leftJoinTableName = $collection->getConnection()->getTableName(self::LEFT_JOIN_TABLE);
            $collection
                ->getSelect()
                ->joinLeft(
                    ['co' => $leftJoinTableName],
                    "co.entity_id = main_table.entity_id",
                    [
                        'order_area_created' => 'co.order_area_created'
                    ]
                );
            $where = $collection->getSelect()->getPart(Select::WHERE);
            $collection->getSelect()->setPart(Select::WHERE, $where);
        }

        return $collection;
    }
}