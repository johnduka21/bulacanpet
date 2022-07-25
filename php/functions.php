<?php
    function emptyInputSignUp($fname, $lname, $email, $username, $pwd, $pwdRepeat){
        $result = true; 
        if (empty($fname) || empty($lname) || empty( $email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function invalidUid($username){
        $result = true; 
        if (!preg_match("/^[a-zA-z0-9]*$/", $username)){
            $result = true;
        }
        else{
            $result = false;
        } 
        return $result;
    }

    function invalidEmail($email){
        $result = true; 
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        }
        else{
            $result = false;
        } 
        return $result;
    }

    function pwdMatch($pwd, $pwdRepeat){
        $result = true; 
        if ($pwd != $pwdRepeat){
            $result = true; //meaning there was an error
        }
        else{
            $result = false;
        } 
        return $result;
    }

    function uidExists($link, $username, $email){
        $sql = "SELECT*FROM users WHERE usersUid = ? OR usersEmail = ?;";
        $stmt = mysqli_stmt_init($link);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ./ecom-sign-up.php?error=stmtfailed");
            exit();
        } 

        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);

        $resultsData = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($resultsData)){
            return $row;
        }
        else {
            $result = false;
        }

        mysqli_stmt_close($stmt);
        return $result;
    }

    function createUser($link, $fname, $lname, $email, $username, $pwd){
        $sql = "INSERT INTO users (usersFirstName, usersLastName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?, ?);";
        //VALUES ('{$fname}', '{$lname}', '{$email}','{$username}','{$pwd}');";
        //VALUES ('$fname', '$lname', '$email','$username','$pwd');";
        //VALUES (?, ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($link);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../ecom-sign-up.php?error=stmtfailed");
            exit();
        } 

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        $stmt -> bind_param("sssss", $fname, $lname, $email, $username, $hashedPwd);
        //mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $email, $username, $hashedPwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        echo "<script language='javascript'>";
        echo "alert('Sign-Up Successful!');\n";
        echo "window.location.href='../ecom-sign-in.php'"; //Redirects the user with JavaScript
        echo "</script>";
        //header("location: ../ecom-sign-in.php");
        //header("location: ../ecom-sign-up.php?error=none");
        exit();
    }

//Sign-In Code

    function emptyInputSignin($username, $pwd){
    $result = true; 
    if (empty($username) || empty($pwd)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
    }

    function loginUser($link, $username, $pwd){
        $uidExists = uidExists($link, $username, $username);

        if ($uidExists == false){
            header("location: ../ecom-sign-in.php?error=wronglogin");
            exit();
        }

        $pwdHashed = $uidExists['usersPwd'];
        $checkPwd = password_verify($pwd, $pwdHashed);

        if($checkPwd === false){
            header("location: ../ecom-sign-in.php?error=wrongpassword");
            exit();
        }
        else if($checkPwd === true){
            session_start();
            $_SESSION["usersid"] = $uidExists['usersId'];
            $_SESSION["usersuid"] = $uidExists['usersUid'];
            header("location: ../home.php");
            exit();
        }
    }

    