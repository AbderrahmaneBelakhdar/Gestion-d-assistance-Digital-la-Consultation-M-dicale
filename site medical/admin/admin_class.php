<?php
session_start();
ini_set('display_errors', 1);
Class Action {
	private $db;

	public function __construct() {
		ob_start();
   	include 'conn.php';
    
    $this->db = $conn;
	}
	function __destruct() {
	    $this->db->close();
	    ob_end_flush();
	}







	function save_schedule(){
		extract($_POST);
		foreach($days as $k => $val){
			$data = " doctor_id = '$doctor_id' ";
			$data .= ", day = '$days[$k]' ";
			$data .= ", time_from = '$time_from[$k]' ";
			$data .= ", time_to = '$time_to[$k]' ";
			if(isset($check[$k])){
				if($check[$k]>0)
				$save[] = $this->db->query("UPDATE medecin_programme set ".$data." where id =".$check[$k]);
			else
				$save[] = $this->db->query("INSERT INTO medecin_programme set ".$data);
			}
		}

			if(isset($save)){
				return 1;
			}
	}


	function set_appointment(){
		extract($_POST);
		$doc = $this->db->query("SELECT * FROM informationsm where id = ".$doctor_id);
		$schedule = date('Y-m-d',strtotime($date)).' '.date('H:i',strtotime($time)).":00";
		$day = date('l',strtotime($date));
		$time = date('H:i',strtotime($time)).":00";
		$sched = date('H:i',strtotime($time));
		$doc_sched_check = $this->db->query("SELECT * FROM medecin_programme where doctor_id = $doctor_id and day = '$day' and ('$time' BETWEEN time_from and time_to )");
		if($doc_sched_check->num_rows <= 0){
			return json_encode(array('status'=>2,"msg"=>"Appointment schedule not valid for selected doctor's schedule."));
			exit;
		}

		$data = " doctor_id = '$doctor_id' ";
		if(!isset($patient_id))
		$data .= ", patient_id = '".$_SESSION['login_id']."' ";
		else
		$data .= ", patient_id = '$patient_id' ";

		$data .= ", schedule = '$schedule' ";
		if(isset($status))
		$data .= ", status = '$status' ";
		if(isset($id) && !empty($id))
		$save = $this->db->query("UPDATE appointment_list set ".$data." where id = ".$id);
		else
		$save = $this->db->query("INSERT INTO appointment_list set ".$data);
		if($save){
			return json_encode(array('status'=>1));
		}
	}
	function delete_appointment(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM appointment_list where id = ".$id);
		if($delete)
			return 1;
	}
	
}


