<?php
namespace app\models;


class EmployeeDepartment{

protected $id;
protected $employee_id;
protected $department_id;
protected $join_date;


    public function __construct(){

    }

	public function getId(){
    	return $this->id;
	}
	public function getEmployeeId(){
    	return $this->employee_id;
	}
	public function getDepartmentId(){
    	return $this->department_id;
	}
	public function getJoinDate(){
    	return $this->join_date;
	}


	public function setId($id){
    	$this->id=$id;
	}
	public function setEmployeeId($employee_id){
    	$this->employee_id=$employee_id;
	}
	public function setDepartmentId($department_id){
    	$this->department_id=$department_id;
	}
	public function setJoinDate($join_date){
    	$this->join_date=$join_date;
	}


}