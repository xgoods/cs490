<?php
//class Login {
//	public function post($data,$db) {
$db=mysqli_connect("sql2.njit.edu","ad379","admin","ad379");
if (mysqli_connect_errno()) {
	http_response_code(500);
	die(json_encode(array(
		"status" => -1,
		"message" => mysqli_connect_error())));
}
        $result = mysqli_query($db, "SELECT uid FROM User WHERE (role = 'student');");
        if (!$result) {
            mysqli_close($db);
            die(json_encode(array(
                "status" => -1,
                "message" => mysqli_connect_error())));
        }
        $return = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $return[] = $row['uid'];
        }
//        $return['status'] = 1;
        mysqli_close($db);
        $je = (json_encode($return));
        echo $je;

//	}
//}
?>
