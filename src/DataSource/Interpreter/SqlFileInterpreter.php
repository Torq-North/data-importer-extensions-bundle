<?php

namespace TorqNorth\DataImporterExtensionsBundle\DataSource\Interpreter;

use TorqNorth\DataImporterExtensionsBundle\DataSource\Interpreter\BulkCsvFileInterpreter;

class SqlFileInterpreter extends BulkCsvFileInterpreter
{
    public function setSettings(array $settings): void
    {
        $this->skipFirstRow = true;
        $this->delimiter = ',';
        $this->enclosure = '"';
        $this->escape = '\\';
    }
}
