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

    protected $elements = [];
    protected string $bgImage = '';

    protected function formatOptions()
    {
        return $this->options;
    }

    public function backgroundImage(string $imageUrl)
    {
        $this->bgImage = $imageUrl;

        return $this;
    }

    public function textElements($elements = [])
    {
        $this->elements = $elements;

        return $this;
    }

    public function height(int $height)
    {
        $this->mergeOptions(['height' => $height]);

        return $this;
    }

    public function render()
    {
        $this->addVariables([
            'options' => $this->options,
            'elements' => $this->elements,
            'bg_image' => $this->bgImage,
        ]);  
        return parent::render();
    }
}
