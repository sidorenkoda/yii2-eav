<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace mirocow\eav\widgets;

use mirocow\eav\handlers\AttributeHandler;

class NumericInput extends AttributeHandler
{
    static $order = 0;

    static $fieldView = <<<TEMPLATE
    <input type='text' 
      class='form-control input-sm rf-size-<%= rf.get(Formbuilder.options.mappings.SIZE) %>' 
      <% if ( rf.get(Formbuilder.options.mappings.LOCKED) ) { %>disabled readonly<% } %> 
    />    
TEMPLATE;

    static $fieldSettings = <<<TEMPLATE
    <%= Formbuilder.templates['edit/field_options']() %>
    <%= Formbuilder.templates['edit/integer_only']() %>
    <%= Formbuilder.templates['edit/min_max']() %>
TEMPLATE;

    static $fieldButton = <<<TEMPLATE
    <span class='symbol'><span class='fa fa-font'></span></span> Input numericfield    
TEMPLATE;

    static $defaultAttributes = <<<TEMPLATE
function (attrs) {
            attrs.field_options.size = 'small';
            return attrs;
        }    
TEMPLATE;


    public function init()
    {
        parent::init();

        //$this->owner->addRule($this->getAttributeName(), 'string', ['max' => 255]);
    }

    public function run()
    {
        return $this->owner->activeForm->field(
            $this->owner, 
            $this->getAttributeName(), 
            ['template' => "{input}\n{hint}\n{error}"])
            ->textInput();
    }
}