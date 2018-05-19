<?php
namespace app\models;


class Department{

protected $id;
protected $name;
protected $code;
protected $added_date;
protected $modified_date;
protected $status;


    public function __construct(){

    }

	public function getId(){
    	return $this->id;
	}
	public function getName(){
    	return $this->name;
	}
	public function getCode(){
    	return $this->code;
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
	public function setName($name){
    	$this->name=$name;
	}
	public function setCode($code){
    	$this->code=$code;
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