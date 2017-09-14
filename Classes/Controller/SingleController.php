<?php
namespace Nreach\T3Data\Controller;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use Nreach\T3Data\Domain\Repository\EntityRepository;

/**
 * Ontoaut Controller of the Annotate extension
 *
 * @category    Controller
 */
class SingleController extends Controller
{

    /**
     * EntityRepository
     *
     * @var \Nreach\T3Data\Domain\Repository\EntityRepository
     * @inject
     */
    protected $entities;

    /**
     * index action for this controller.
     * @return void
     */
    public function indexAction()
    {
        $ids = explode(',', $this->settings['entities']);
        // $blocks = array_map(function($id){
        //     $entity = $this->entities->findByUid($id);
        //     return sprintf("<script type=\"application/ld+json\">\n%s\n</script>", $entity->getJsonld());
        // }, $ids);
        // $result = implode("\n", $blocks);
        $this->view->assign('jsonld', "crap");

        return $this->view->render();
    }
}
