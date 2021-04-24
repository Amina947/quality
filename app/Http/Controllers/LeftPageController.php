<?php
class LeftPageController extends Controller {

	public function showLeftpage(){
		return View:: make("left-sidebar");
	}
}