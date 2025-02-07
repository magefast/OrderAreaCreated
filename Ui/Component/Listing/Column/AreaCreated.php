<?php

namespace Dragonfly\OrderAreaCreated\Ui\Component\Listing\Column;

use Dragonfly\OrderAreaCreated\Service\Settings;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;

class AreaCreated extends Column
{
    /**
     * @param ContextInterface $context
     * @param UiComponentFactory $uiComponentFactory
     * @param array $components
     * @param array $data
     */
    public function __construct(
        ContextInterface   $context,
        UiComponentFactory $uiComponentFactory,
        array              $components = [],
        array              $data = []
    )
    {
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    /**
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            $settings = Settings::AREA_LIST;
            $fieldName = Settings::FIELD_NAME;
            foreach ($dataSource['data']['items'] as & $item) {
                if (isset($item[$fieldName]) && isset($settings[$item[$fieldName]])) {
                    $value = $settings[$item[$fieldName]];
                    $item[$fieldName] = $value;
                }
            }
        }
        return $dataSource;
    }
}