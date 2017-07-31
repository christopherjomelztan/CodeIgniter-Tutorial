<?php

class EmployeeController extends CI_Controller {
	public function index() {
		$this->load->model("EmployeeModel");
		$data["employeeArray"] = $this->EmployeeModel->getEmployees();
		$this->load->helper('utility_helper');
		$this->load->view("header");
		$this->load->view("Employee", $data);
		$this->load->view("footer");
	}
}
?>