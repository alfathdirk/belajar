<?php
class DB_Functions {

    private $db;

    //put your code here
    // constructor
    function __construct() {
        require_once 'DB_Connect.php';
        // connecting to database
        $this->db = new DB_Connect();
        $this->db->connect();
    }

    // destructor
    function __destruct() {
        
    }

    /**
     * Storing new user
     * returns user details
     */
    public function storeUser($name, $username, $password) {
        $uuid = uniqid('', true);
        $hash = $this->hashSSHA($password);
        $encrypted_password = $hash["encrypted"]; // encrypted password
        $salt = $hash["salt"]; // salt
        $result = mysql_query("INSERT INTO tbl_users(name, username, encrypted_password, salt, created_at) VALUES('$name', '$username', '$encrypted_password', '$salt', NOW())");
        // check for successful store
        if ($result) {
            // get user details 
            $uid = mysql_insert_id(); // last inserted id
            $result = mysql_query("SELECT * FROM tbl_users WHERE unique_id = $uid");
            // return user details
            //return mysql_fetch_array($result);
			if($result === FALSE) {
				die(mysql_error());
			} while($row = mysql_fetch_array($result)) {
				return $row;
			}
        } else {
            return false;
        }
    }

    /**
     * Get user by username and password
     */

    function xlog($val){
        echo "<pre>";
        print_r($val);
        echo "</pre>";
    }

    public function getUserByUsernameAndPassword($username, $password) {
        $result = mysql_query("SELECT * FROM tbl_users WHERE username = '$username'") or die(mysql_error());
        // check for result 
        $no_of_rows = mysql_num_rows($result);
        if ($no_of_rows > 0) {
            $result = mysql_fetch_array($result);
            $salt = $result['salt'];
            $encrypted_password = $result['encrypted_password'];
            $hash = $this->checkhashSSHA($salt, $password);
            // $this->xlog($encrypted_password);exit;
            // check for password equality
            if ($encrypted_password == $hash) {
                // user authentication details are correct
                return $result;
            }
        } else {
            // user not found
            return false;
        }
    }

    /**
     * Check user is existed or not
     */
    public function isUserExisted($username) {
        $result = mysql_query("SELECT username from tbl_users WHERE username = '$username'");
        $no_of_rows = mysql_num_rows($result);
        if ($no_of_rows > 0) {
            // user existed 
            return true;
        } else {
            // user not existed
            return false;
        }
    }

    /**
     * Encrypting password
     * @param password
     * returns salt and encrypted password
     */
    public function hashSSHA($password) {

        $salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
        return $hash;
    }

    /**
     * Decrypting password
     * @param salt, password
     * returns hash string
     */
    public function checkhashSSHA($salt, $password) {

        $hash = base64_encode(sha1($password . $salt, true) . $salt);

        return $hash;
    }
	
	private function _generateSalt(){
		$salt = null;
		while( strlen($salt) < 128 )
		$salt = $salt.uniqid(null, true);
		return substr($salt, 0, 128);
	}
	
	public function listUser() {
      	$i = 0;
		$result = mysql_query("SELECT * FROM tbl_users");
        // return user details
        //return mysql_fetch_array($result);
		if($result === FALSE) {
			die(mysql_error());
		} while($row = mysql_fetch_array($result)) {
			$array[$i]['name'] = $row['name'];
			$array[$i]['username'] = $row['username'];
		   	$i++;
		}
		return $array;
    }

}
?>