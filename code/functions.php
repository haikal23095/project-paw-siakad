<?php
function checklogin($data, &$errors){
    $username = $data["username"];
    $password = $data["password"];

    $result = mysqli_query(DB, "SELECT * FROM User WHERE username = '$username' AND password = SHA2('$password', 256) ");

    if (mysqli_num_rows($result) > 0){
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $user;
        $_SESSION['Level'] = $user['Level'];
        
        if ($user['Level'] == 'admin'){
            return header("Location: admin/index.php");
        }elseif($user['Level'] == 'dosen'){
            return header("Location: dosen/index.php");
        }else{
            return header("Location: mahasiswa/index.php");
        }
    }else{
        $errors[] = "Username atau password salah";
        return;
    }
}