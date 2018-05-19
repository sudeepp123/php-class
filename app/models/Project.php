<?php
namespace app\models;


class Project{

protected $id;
protected $title;
protected $description;
protected $client_id;
protected $added_date;
protected $deadline;
protected $modified_date;
protected $status;


    public function __construct(){

    }

	public function getId(){
    	return $this->id;
	}
	public function getTitle(){
    	return $this->title;
	}
	public function getDescription(){
    	return $this->description;
	}
	public function getClientId(){
    	return $this->client_id;
	}
	public function getAddedDate(){
    	return $this->added_date;
	}
	public function getDeadline(){
    	return $this->deadline;
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
	public function setTitle($title){
    	$this->title=$title;
	}
	public function setDescription($description){
    	$this->description=$description;
	}
	public function setClientId($client_id){
    	$this->client_id=$client_id;
	}
	public function setAddedDate($added_date){
    	$this->added_date=$added_date;
	}
	public function setDeadline($deadline){
    	$this->deadline=$deadline;
	}
	public function setModifiedDate($modified_date){
    	$this->modified_date=$modified_date;
	}
	public function setStatus($status){
    	$this->status=$status;
	}


}