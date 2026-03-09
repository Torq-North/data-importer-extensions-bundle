<?php

namespace TorqNorth\DataImporterExtensionsBundle\DataSource\DataLoader\Xlsx;

class XlsxDataLoaderFactory
{
    public static function getExcelDataLoader(): XlsxDataLoaderInterface
    {
        return new SpoutXlsxDataLoader();
    }
}