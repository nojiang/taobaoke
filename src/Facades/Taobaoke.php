<?php

namespace nojiang\Taobaoke\Facades;

use Illuminate\Support\Facades\Facade;

class Taobaoke extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'taobaoke';
	}
}