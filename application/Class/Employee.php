<?php
require_once dirname(__DIR__) . "\\Class\\AutoLoad.php";
$autoLoad = new AutoLoad;
$autoLoad->Load("IEmployee");


class Employee implements IEmployee {
	private $_employeeID;
	private $_nationalIDNumber;
	private $_loginID;
	private $_title;
	
	public function __construct() {
		$this->_employeeID = NULL;
		$this->_nationalIDNumber = NULL;
		$this->_loginID = NULL;
		$this->_title = NULL;
	}
	
	function getEmployeeID() {
		return $this->_employeeID;
	}
	function setEmployeeID($value) {
		$this->_employeeID = $value;
	}
	function getNationalIDNumber() {
		return $this->_nationalIDNumber;
	}
	function setNationalIDNumber($value) {
		$this->_nationalIDNumber = $value;
	}
	function getLoginID() {
		return $this->_loginID;
	}
	function setLoginID($value) {
		$this->_loginID = $value;
	}
	function getTitle() {
		return $this->_title;
	}
	function setTitle($value) {
		$this->_title = $value;
	}
}
?>