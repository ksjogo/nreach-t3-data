<?php
namespace Nreach\T3Data\Controller;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Ontoaut Controller of the Annotate extension
 *
 * @category    Controller
 */
abstract class Controller extends ActionController
{

    /**
     * Initializes the controller before invoking an action method.
     * @return void
     */
    protected function initializeAction() {
        parent::initializeAction();
    }

    /**
     * index action for this controller.
     * @return void
     */
    abstract public function indexAction();
}
