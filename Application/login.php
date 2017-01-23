<?php

    session_start();

    if(isset($_SESSION['u_fisrtname']) && ($_SESSION['u_id']))
    {
        $name=$_SESSION['u_fisrtname'];
        $id=$_SESSION['u_id'];
        $status=$_SESSION['status'];

                    if($status=="2")
                    {
                        $admin="admin";
                        $response["success"]=$admin;
                        echo json_encode($response);

                        $_SESSION['username']="admin";
                        $_SESSION['password']=$result1;
                            
                        header('Location: ../Application/AdminMain.php');
                        exit();
                        
                    }
                    else if($status=="1")
                    {
                        $user="user";
                        $response["success"]=$user;
                        echo json_encode($response);
                        
                        $_SESSION['status'] = 1;
                        $_SESSION['username']=$result1;
                            
                        header('Location: ../Application/UserMain.php');
                        exit();

                    }
                    else
                    {
                        header('Location: ../website/index.php');
                        mysqli_close($response); 
                    }
    }
    else
    {
        header('location: error.php');
    }

?>