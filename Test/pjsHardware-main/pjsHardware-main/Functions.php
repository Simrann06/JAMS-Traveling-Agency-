<?php

function check_login($con)

{


    if(isset($_SESSION['user_id']))
    {
        $id = $_SESSION['user_id'];
        $query = "SELECT * from users WHERE user_id = '$id' limit 1";

        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0)
        {

            $user_data = msqli_fetch_assoc($result);
            return $user_data; 
        }

    }

    //redirect to login 

    header("Location: customerLogin.html");

    die;
}
