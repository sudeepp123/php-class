<?php
namespace app\models;


class ProjectFollowup{

protected $id;
protected $project_id;
protected $message;
protected $followup_date;
protected $next_follow_date;


    public function __construct(){

    }

	public function getId(){
    	return $this->id;
	}
	public function getProjectId(){
    	return $this->project_id;
	}
	public function getMessage(){
    	return $this->message;
	}
	public function getFollowupDate(){
    	return $this->followup_date;
	}
	public function getNextFollowDate(){
    	return $this->next_follow_date;
	}


	public function setId($id){
    	$this->id=$id;
	}
	public function setProjectId($project_id){
    	$this->project_id=$project_id;
	}
	public function setMessage($message){
    	$this->message=$message;
	}
	public function setFollowupDate($followup_date){
    	$this->followup_date=$followup_date;
	}
	public function setNextFollowDate($next_follow_date){
    	$this->next_follow_date=$next_follow_date;
	}


}