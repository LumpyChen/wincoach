<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

	public function substr_cut($str_cut,$length) {
		if (mb_strlen($str_cut) > $length) {
			
			$str_cut = mb_substr($str_cut,0,$length)."..";
		}
		return $str_cut;
	}
}
