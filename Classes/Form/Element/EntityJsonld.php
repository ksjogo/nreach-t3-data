<?php
namespace Nreach\T3Data\Form\Element;

class EntityJsonld extends \Nreach\T3Base\Form\Element\Base
{
   public function render()
   {
       return array_merge_recursive(parent::render(), [
           'linkAttributes' => [
               'class' => 'nreacht3-entity-jsonld ',
               'data-storekey' => 'entityeditor',
               'data-upmount' => 2
           ]
       ]);
   }
}
