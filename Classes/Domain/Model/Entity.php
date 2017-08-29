<?php
namespace Nreach\T3Data\Domain\Model;

use \TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Entity extends AbstractEntity {

    /**
     * @var string
     **/
    protected $formdata = '';

    /**
     * @var string
     **/
    protected $title = '';

    /**
     * @var string
     **/
    protected $jsonld = '';

    public function __construct($title = '', $formdata = '', $jsonld = '') {
        $this->setFormdata($formdata);
        $this->setTitle($title);
        $this->setJsonld($jsonld );
    }

    public function setFormdata($formdata) {
        $this->formdata = (string)$formdata;
    }

    public function getFormdata() {
        return $this->formdata;
    }

    public function setJsonld($jsonld ) {
        $this->jsonld  = (string)$jsonld;
    }

    public function getJsonld() {
        return $this->jsonld;
    }

    public function setTitle($title ) {
        $this->title = (string)$title;
    }

    public function getTitle() {
        return $this->title;
    }
}
