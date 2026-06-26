<?php

namespace TorqNorth\DataImporterExtensionsBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;
use Pimcore\Extension\Bundle\PimcoreBundleAdminClassicInterface;

class TorqNorthDataImporterExtensionsBundle extends AbstractPimcoreBundle implements PimcoreBundleAdminClassicInterface
{

    public function getAdminIframePath() {}

    public function getCssPaths(): array
    {
        return [];
    }

    public function getEditmodeJsPaths(): array
    {
        return [];
    }

    public function getEditmodeCssPaths(): array
    {
        return [];
    }

    public function getJsPaths(): array
    {
        return [
            '/bundles/torqnorthdataimporterextensions/js/pimcore/resolver/load/advanced-path.js',
            '/bundles/torqnorthdataimporterextensions/js/pimcore/resolver/load/property.js',
            '/bundles/torqnorthdataimporterextensions/js/pimcore/resolver/location/advanced-parent.js',
            '/bundles/torqnorthdataimporterextensions/js/pimcore/interpreter/advanced-xlsx.js',
            '/bundles/torqnorthdataimporterextensions/js/pimcore/interpreter/bulk-xlsx.js',
            '/bundles/torqnorthdataimporterextensions/js/pimcore/interpreter/xml-schema-based-preview.js',
            '/bundles/torqnorthdataimporterextensions/js/pimcore/interpreter/bulk-csv.js',
            '/bundles/torqnorthdataimporterextensions/js/pimcore/interpreter/bulk-sql.js',
            '/bundles/torqnorthdataimporterextensions/js/pimcore/mapping/operator/safe-key.js',
            '/bundles/torqnorthdataimporterextensions/js/pimcore/mapping/operator/arithmetic.js',
            '/bundles/torqnorthdataimporterextensions/js/pimcore/mapping/operator/regex-replace.js',
            '/bundles/torqnorthdataimporterextensions/js/pimcore/mapping/operator/constant.js',
            '/bundles/torqnorthdataimporterextensions/js/pimcore/mapping/datatarget/property.js',
            '/bundles/torqnorthdataimporterextensions/js/pimcore/mapping/datatarget/tags.js',
            '/bundles/torqnorthdataimporterextensions/js/pimcore/mapping/datatarget/advanced-classification-store.js',
            '/bundles/torqnorthdataimporterextensions/js/pimcore/mapping/operator/import-asset-advanced.js',
            '/bundles/torqnorthdataimporterextensions/js/pimcore/mapping/datatarget/image-gallery-appender.js',
            '/bundles/torqnorthdataimporterextensions/js/pimcore/loader/bulk-sql.js',
            '/bundles/torqnorthdataimporterextensions/js/pimcore/mapping/operator/asLink.js',
            '/bundles/torqnorthdataimporterextensions/js/pimcore/mapping/operator/asCountryCode.js',
            '/bundles/torqnorthdataimporterextensions/js/pimcore/mapping/datatarget/fieldCollection.js',
            '/bundles/torqnorthdataimporterextensions/js/pimcore/mapping/operator/fieldCollectionOperator.js',
        ];
    }
}
