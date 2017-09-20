<?php
namespace Nreach\T3Data;

class Utility {
    static function textForEntities($uidString, $repository) {
        $ids = explode(',', $uidString);
        $blocks = array_map(function($id) use ($repository) {
            $entity = $repository->findByUid($id);
            return sprintf("<script type=\"application/ld+json\">\n%s\n</script>", $entity->getJsonld());
        }, $ids);
        $result = implode("\n", $blocks);
        return $result;
    }
}
