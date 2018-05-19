<?php
namespace app\models;


class Employee{

protected $id;
protected $first_name;
protected $last_name;
protected $email;
protected $contact_no;
protected $address;
protected $added_date;
protected $modified_date;
protected $status;


    public function __construct(){

    }

	public function getId(){
    	return $this->id;
	}
	public function getFirstName(){
    	return $this->first_name;
	}
	public function getLastName(){
    	return $this->last_name;
	}
	public function getEmail(){
    	return $this->email;
	}
	public function getContactNo(){
    	return $this->contact_no;
	}
	public function getAddress(){
    	return $this->address;
	}
	public function getAddedDate(){
    	return $this->added_date;
	}
	public function getModifiedDate(){
    	return $this->modified_date;
	}
	public function getStatus(){
    	return $this->status;
	}


	public function setId($id){
    	$this->id=$id;
	}
	public function setFirstName($first_name){
    	$this->first_name=$first_name;
	}
	public function setLastName($last_name){
    	$this->last_name=$last_name;
	}
	public function setEmail($email){
    	$this->email=$email;
	}
	public function setContactNo($contact_no){
    	$this->contact_no=$contact_no;
	}
	public function setAddress($address){
    	$this->address=$address;
	}
	public function setAddedDate($added_date){
    	$this->added_date=$added_date;
	}
	public function setModifiedDate($modified_date){
    	$this->modified_date=$modified_date;
	}
	public function setStatus($status){
    	$this->status=$status;
	}


}