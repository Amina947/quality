<?php

namespace qualite\Http\Controllers;
use qualite\Http\Controllers\Controller;

use View;


class HomePageController extends Controller {

	public function showHomepage(){
		return View::make("login");
	}
}
