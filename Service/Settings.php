<?php

namespace Dragonfly\OrderAreaCreated\Service;

class Settings
{
    public const FIELD_NAME = 'order_area_created';

    public const AREA_ROZETKA = 'rozetka';
    public const AREA_ROZETKA_LABEL = 'Rozetka';

    public const AREA_PROM = 'prom';
    public const AREA_PROM_LABEL = 'Prom';

    public const AREA_SITE = 'user';
    public const AREA_SITE_LABEL = 'user';

    public const AREA_LIST = [
        self::AREA_ROZETKA => self::AREA_ROZETKA_LABEL,
        self::AREA_PROM => self::AREA_PROM_LABEL,
        self::AREA_SITE => self::AREA_SITE_LABEL,
    ];
}
