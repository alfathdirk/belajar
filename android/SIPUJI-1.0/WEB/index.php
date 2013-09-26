<?php
if (isset($_POST['tag']) && $_POST['tag'] != '') {
    // get tag
    $tag = $_POST['tag'];

    // include db handler
    require_once 'includes/DB_Functions.php';
    $db = new DB_Functions();

    // response Array
    $response = array("tag" => $tag, "success" => 0, "error" => 0);

    // check for tag type
    if ($tag == 'login') {
        // Request type is check Login
        $username = $_POST['username'];
        $password = $_POST['password'];

        // check for user
        $user = $db->getUserByUsernameAndPassword($username, $password);
        if ($user != false) {
            // user found
            // echo json with success = 1
            $response["success"] = 1;
            $response["uid"] = $user["unique_id"];
            $response["user"]["name"] = $user["name"];
            $response["user"]["username"] = $user["username"];
            $response["user"]["created_at"] = $user["created_at"];
            $response["user"]["updated_at"] = $user["updated_at"];
			
			// if (isset($_POST['device']) && $_POST['device'] == 'web') {
			// 	session_start();
			// 	$_SESSION['auth'] = 1;
   // 				setcookie("username", $user["name"], time()+(84600*30));
			// 	header('Location: dashboard.php');
   // 				exit();
			// }
			
            echo json_encode($response);
        } else {
            // user not found
            // echo json with error = 1
            $response["error"] = 1;
            $response["error_msg"] = "Error: Nama pengguna atau kata sandi salah";
			if (isset($_POST['device']) && $_POST['device'] == 'web') {
				header('Location: login.php?error=1');
   				exit();
			}
            echo json_encode($response);
        }
    } else if ($tag == 'register') {
        // Request type is Register new user
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['passwd'];

        // check if user is already existed
        if ($db->isUserExisted($username)) {
            // user is already existed - error response
            $response["error"] = 2;
            $response["error_msg"] = "Error: Nama pengguna sudah ada";
            echo json_encode($response);
        } else {
            // store user
            $user = $db->storeUser($name, $username, $password);
            if ($user) {
                // user stored successfully
                $response["success"] = 1;
                $response["uid"] = $user["unique_id"];
                $response["user"]["name"] = $user["name"];
                $response["user"]["username"] = $user["username"];
                $response["user"]["created_at"] = $user["created_at"];
				if (isset($_POST['device']) && $_POST['device'] == 'web') {
					header('Location: dashboard.php');
					exit();
				}
                echo json_encode($response);
            } else {
                // user failed to store
                $response["error"] = 1;
                $response["error_msg"] = "Error: Kesalahan sistem dalam register";
               	if (isset($_POST['device']) && $_POST['device'] == 'web') {
					header('Location: dashboard.php');
					exit();
				}
			    echo json_encode($response);
            }
        }
    } else {
        echo "Invalid Request";
    }
}else if (isset($_GET['logoff']) && $_GET['logoff'] == 1) {
	session_unset();
    session_destroy();
	header("Location: login.php");
	exit();
} else {
    header("Location: login.php");
	exit();
}
?>