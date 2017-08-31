<?php
namespace Nreach\T3Data\Form\Element;

class EntityFormdata extends \Nreach\T3Base\Form\Element\Base
{
   public function render()
   {
       return array_merge_recursive(parent::render(), [
           'linkAttributes' => [
               'class' => 'nreacht3-entity-formdata ',
               'data-storekey' => 'entityeditor',
               'data-upmount' => 2
           ]
       ]);
   }
}
