<?php
namespace app\models;


class ProjectStatus{

protected $id;
protected $title;
protected $color;


    public function __construct(){

    }

	public function getId(){
    	return $this->id;
	}
	public function getTitle(){
    	return $this->title;
	}
	public function getColor(){
    	return $this->color;
	}


	public function setId($id){
    	$this->id=$id;
	}
	public function setTitle($title){
    	$this->title=$title;
	}
	public function setColor($color){
    	$this->color=$color;
	}


}