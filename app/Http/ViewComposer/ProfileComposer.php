<?php
namespace App\Http\ViewComposer;
use Illuminate\View\View;

Class ProfileComposer
{
	// use create instead of compose
	public function compose(View $view)
	{
		$view-> with('married', random_int(0, 1));
		$view-> with('test','Hello Test');

	}
}