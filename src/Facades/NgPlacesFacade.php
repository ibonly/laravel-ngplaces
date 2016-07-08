<?php

namespace Ibonly\NgPlaces\Facades;

use Illuminate\Support\Facades\Facade;

class NgPlacesFacade extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'laravel-ngplaces';
	}
}