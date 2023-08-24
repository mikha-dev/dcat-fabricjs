<?php

namespace Dcat\Admin;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;
use Dcat\Admin\Form as BaseForm;

class FabricjsServiceProvider extends ServiceProvider
{
	protected $js = [
	    'fabric.min.js'
    ];
	protected $css = [
	];

	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

        Admin::requireAssets('@mikha-dev.dcat-fabricjs');
        $this->loadViewsFrom(__DIR__.'/../resources/views', '@mikha-dev.dcat-fabricjs');
        BaseForm::extend('fabricjs', Fabricjs::class);

	}

//	public function settingForm()
//	{
//		return new Setting($this);
//	}
}
