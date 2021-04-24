<?php
class NoSidebarPageController extends Controller {

	public function showNoSidebarpage(){
		return View:: make("no-sidebar");
	}
}