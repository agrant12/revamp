<?php namespace App\Http\Controllers;

class AdminController extends Controller {
	
	public function __construct() {

	}

	public function index() {
		return view('admin.index');
	}

	public function photography() {
		return view('admin.photography');
	}

	public function blog() {
		return view('admin.blog');
	}

	public function development() {
		return view('admin.development');
	}

	public function profile() {
		return view('admin.profile');
	}

	public function contact() {
		return view('admin.contact');
	}
}