<?php
namespace Nreach\T3Data\Controller;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Ontoaut Controller of the Annotate extension
 *
 * @category    Controller
 */
class EntitiesController extends Controller
{

    /**
     * Initializes the controller before invoking an action method.
     * @return void
     */
    protected function initializeAction() {
        super::initializeAction();

        $pageRenderer = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Page\PageRenderer::class);
        $pageRenderer->loadRequireJsModule('TYPO3/CMS/NreachT3Data/Entities');
        $this->setTemplatePaths();
    }

    /**
     * Fix the template paths
     * @return void
     */
    private function setTemplatePaths(){
        $frameworkConfiguration = $this->configurationManager->getConfiguration(\TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK);
        $viewConfiguration = [
            'view' => [
                'templateRootPaths' => ['EXT:nreach_t3_data/Resources/Private/Templates/'],
                'partialRootPaths' => ['EXT:nreach_t3_data/Resources/Private/Partials/'],
                'layoutRootPaths' => ['EXT:nreach_t3_data/Resources/Private/Layouts/'],
            ]
        ];
        $this->configurationManager->setConfiguration(array_merge($frameworkConfiguration, $viewConfiguration));
    }

    /**
     * index action for this controller.
     * @return void
     */
    public function indexAction()
    {
    }
}
