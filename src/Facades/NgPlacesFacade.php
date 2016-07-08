<?php

namespace Ibonly\NgPlaces\Facades;

use Illuminate\Support\Facades\Facade;

class NgPlacesFacade extend Facade
{
	protected function getFacadeAccessor()
	{
		return 'laravel-ngplaces';
	}
}