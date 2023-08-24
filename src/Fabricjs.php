<?php

namespace Dcat\Admin;

use Dcat\Admin\Form\Field;
use Dcat\Admin\Support\JavaScript;

class Fabricjs extends Field
{
    protected $view = 'mikha-dev.dcat-fabricjs::fabricjs';

    protected $options  = [
        'height' => 400,
        'width' => 400
    ];    

    protected function formatOptions()
    {
        return $this->options;
    }

    public function backgroundImage(string $imageUrl)
    {
        return $this->options['bg-image'] = $imageUrl;
    }

    public function textElements(string $elements[])
    {
        return $this->elements = $elements;
    }

    public function height(int $height)
    {
        return $this->mergeOptions(['height' => $height]);
    }

    public function render()
    {
        $this->addVariables([
            'options' => JavaScript::format($this->formatOptions()),
            'elements' => $this->elements,
        ]);  
        return parent::render();
    }
}
