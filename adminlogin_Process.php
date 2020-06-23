<?php session_start();
	  
	  
$name = $_POST['name'] ;
$password = $_POST['password'] ;


$_SESSION['password'] = $password ;

	$allAdmins = scandir("db/admins/");
  $adminCount = count($allAdmins);
  
		
	//check if email is registered
     
	for($counter=0; $counter< count($allAdmins); $counter++){
          $currentAdmin = $allAdmins[$counter];
          
			$userString= file_get_contents("db/admins/".$currentAdmin);
            $userObject = json_decode($userString);
		  if($userObject->username == $name){
			  // Password check

			$passwordFromDb = $userObject->password;
			$passwordFromUser = $password;
			   $passwordFromUser = password_verify($password, $passwordFromDb);
			if($passwordFromUser == $passwordFromDb) {
				
			header('Location: index.php');
				die();   
			}
		  

	}
    $_SESSION['error'] = "Invalid email or password";
header('Location: adminlogin.php');
 }
?>