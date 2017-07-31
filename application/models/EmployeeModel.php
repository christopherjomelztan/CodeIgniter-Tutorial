<?php
require_once dirname(__DIR__) . "\\Class\\AutoLoad.php";
$autoLoad = new AutoLoad;
$autoLoad->Load("Employee");
class EmployeeModel extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	public function getEmployees() {
		$employeeArray = array();
		$query = $this->db->get("employee");
		$result = $query->result();
		foreach($result as $r) {
			$employee = new Employee();
			$employee->setEmployeeID($r->EmployeeID);
			$employee->setLoginID($r->LoginID);
			$employee->setNationalIDNumber($r->NationalIDNumber);
			$employee->setTitle($r->Title);
			array_push($employeeArray,$employee);
		}
		return $employeeArray;
	}
}
?>