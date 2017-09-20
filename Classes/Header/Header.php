<?php
namespace Nreach\T3Data\Header;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use Nreach\T3Data\Utility;

class Header
{
    public function header()
    {
        try {
            $xml = $this->cObj->data['tx_t3data_entities'];
            $flex = [];
            $this->cObj->readFlexformIntoConf($xml, $flex);
            $ids = $flex['settings.entities'];

            if (empty($ids))
               return '';

            $objectManager = GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\ObjectManager::class);
            $repository = $objectManager->get(\Nreach\T3Data\Domain\Repository\EntityRepository::class);

            $text = Utility::textForEntities($ids, $repository);

            return $text;

        } catch(\Exception $e) {
            return '';
        }
    }
}
