<?php defined('BASEPATH') or exit('No direct script access allowed');

//use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';


class Momo extends REST_Controller
{

	public function get_signal_get()
	{
		header('Access-Control-Allow-Origin: * ');

		$status = "Get signal";
		$res = $_GET;

		$this->response([$res, $status]);
	}

	public function success_get()
	{
		header('Access-Control-Allow-Origin: * ');

		$status = "success";
		$res = $_GET;

		$this->response([$res, $status]);
	}

	public function failure_get()
	{
		header('Access-Control-Allow-Origin: * ');

		$status = "Failure";
		$res = $_GET;

		$this->response([$res, $status]);
	}
	public function cancel_get()
	{
		header('Access-Control-Allow-Origin: * ');

		$status = "Cancel";
		$res = $_GET;

		$this->response([$res, $status]);
	}

	public function notification_get()
	{
		header('Access-Control-Allow-Origin: * ');

		$status = "Notification";
		$res = $_GET;

		$this->response([$res, $status]);
	}
}
