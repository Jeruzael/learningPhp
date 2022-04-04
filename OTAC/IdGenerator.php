<?php 
include_once('../php/connection.php');

class Idgen {

	public static $code1 = "SAMPLE";
	public static $code2 = array(
		"slot1" => 0,
		"slot2" => 0,
		"slot3" => 0,
		"slot4" => 0
	);
	public static $data = array();

	public static function genNum($a = "0"){
		for($i = 0; $i <= $a; $i++){
			self::$code2["slot1"] = self::$code2["slot1"] + 1;
			if(self::$code2["slot1"] == 10){
				self::$code2["slot2"] = self::$code2["slot2"] + 1;
				self::$code2["slot1"] = 0;
				if(self::$code2["slot2"] == 10){
					self::$code2["slot3"] = self::$code2["slot3"] + 1;
					self::$code2["slot2"] = 0;
					if(self::$code2["slot3"] == 10){
						self::$code2["slot4"] = self::$code2["slot4"] + 1;
						self::$code2["slot3"] = 0;
					}
				}	
			}
		}

		return self::$code1 . self::$code2["slot4"] . self::$code2["slot3"] . self::$code2["slot2"] . self::$code2["slot1"];				
	}

	public static function checkExistingId(){
		$con = connect();

		$getId = "SELECT id FROM account";
		$result = $con->query($getId);

		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				printf("ID: %s \n", $row["id"]);
				self::$data[] = $row["id"];
			}			
			
		}else{
			echo "no data";
		}	

		foreach(self::$data as $d){
			printf("Data: %s", substr($d, 6));
		}

		printf("Array length: %s", count(self::$data));
		
		/*if(rsort(self::$data, SORT_REGULAR) === TRUE){
			foreach(self::$data as $d => $val){
				printf("Data: %s", substr($val, 6));
			}
		}else{
			echo "no data";
		}*/		

		if(sort(self::$data, SORT_REGULAR) === TRUE){
			echo self::$data[count(self::$data)-1];
			return substr(self::$data[count(self::$data)-1], 6);
		}else{
			echo "cannot sort, no data";
		}

	}
	
	public static function genID(){
	
	}
}


?>