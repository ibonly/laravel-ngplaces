<?php

namespace Ibonly\NgPlaces;

use Illuminate\Support\ServiceProvider;

class NgPlacesServiceProvider extends ServiceProvider
{
	protected $defer = false;

	public function register()
	{
		$this->app->bind('laravel-ngplaces', function() {
			return new NgPlaces;
		});
	}

	public function provides()
	{
		return ['laravel-ngplaces'];
	}
}