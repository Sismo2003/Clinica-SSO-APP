<?php

try {
    require 'db/con.php';
    $conn = connection();

    $username = $_POST['username']; // for the username is just a guess
    $pass = md5($_POST['password']);

    if (empty($username) || empty($pass)) {
        $conn->close();
        die(json_encode([
            'success' => false,
            'message' => 'Usuario o contraseña vacios!'
        ]));
    }

    $query = "SELECT * FROM users
            WHERE username = '$username' AND
            pass = '$pass' AND 
            status = 1 AND deleted = 0" ;

    $answer = $conn->query($query);
    if($answer){
        if($answer->num_rows == 1){
            $row = $answer->fetch_assoc();
            // Asignar el userType y username a la sesión
            $user_type_id = $row['user_type'];
            $userType = '';
            switch ($user_type_id) {
                case 1:
                    $userType = 'doctor';
                    break;
                case 2:
                    $userType = 'asistente';
                    break;
                case 3:
                    $userType = 'dev';
                    break;
                default:
                    $userType = 'unknown';
            }

            session_start();
            $_SESSION['logged'] = true;
            $_SESSION['user_type'] = $userType;
            $_SESSION['username'] = $row['username'];
            $_SESSION['name'] = $row['fullname'];
            $_SESSION['user_id'] = $row['id'];
            $conn->close();
            $ans = json_encode([
                'success' => true,
                'message' => 'Login success',
                'username' => $row['username']
            ]);
            echo $ans;
        }else{
            $conn->close();
            $ans = json_encode([
                'success' => false,
                'message' => 'Usuario o contraseña incorrectos!',
            ]);
            echo $ans;
        }
    }else{
        $conn->close();
        $ans = json_encode([
            'error' => true,
            'message' => $conn->error
        ]);
    }
}catch (Exception $e){
    die(json_encode([
        'error' => true,
        'message' => $e->getMessage()
    ]));
}


?>