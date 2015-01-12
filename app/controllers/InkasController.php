<?php

class InkasController extends BaseController {

	public function index()
	{
            return View::make('index');
	}
       public function signin()
	{
           return View::make('hello');
	}
}
