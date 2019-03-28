<?php

if (isset($_POST['submit'])) {
    include 'dbh.inc.php';
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


// Error handlers; Check if inputs are empty
if (empty($uid) || empty($pwd)) {
    header("Location: ../index.php?login=empty");
    exit();
} else {
    $sql = "SELECT * FROM users WHERE user_id='$uid'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
        header("Location: ../index.php?login=error");
        exit();
    } else{
        if ($row = mysqli_fetch_assoc($result)) {
            // De-hashing the password
            $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
            if ($hashedPwdCheck == false) {
                header("Location: ../index.php?login=error");
                exit();
            } elseif ($hashedPwdCheck == true) {
                
            }
        }
    }
}

} else {
    header("Location: ../index.php?login=error");
    exit();
}
   
