<?php
namespace Nreach\T3Data;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class Utility {
    static function textForEntities($uidString, $htmlWrapper = true) {
        $objectManager = GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\ObjectManager::class);
        $repository = $objectManager->get(\Nreach\T3Data\Domain\Repository\EntityRepository::class);

        $ids = explode(',', $uidString);
        $blocks = array_map(function($id) use ($repository) {
            $entity = $repository->findByUid($id);

            $format = $htmlWrapper ? "<script type=\"application/ld+json\">\n%s\n</script>" : '%s';
             return sprintf($format, $entity->getJsonld());
        }, $ids);
        $result = implode("\n", $blocks);
        return $result;
    }
}
