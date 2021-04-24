<?php
class RightPageController extends Controller {

	public function showRightpage(){
		return View:: make("right-sidebar");
	}
}