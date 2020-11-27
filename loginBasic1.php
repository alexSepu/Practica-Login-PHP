<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once('arrays.php');
        $mail =base64_decode($_POST['email']);
        $passw =$_POST["password"];
        for($i=0;$i<count($user);$i++)
        {
            if(password_verify($passw,$pass[$i])==true && $mail === $user[$i])
            {
                header('Location: https://www.educem.com');
                break;
            }
        }
        if(empty($usuari))
       {
        echo'<script type="text/javascript"> alert("Usuari o contrasenya incorrecte"); </script>';
       }
    }
?>
<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8" />
    <title>Formulari de Login</title>
    <link rel="stylesheet" href="loginBasic1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-md-2 col-0"></div>
            <div class="col-xl-4 col-md-8 col-sm-12">
                <div class="login-form">
                    <form method="POST" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>"
                        onsubmit="return validarForm()">
                        <input type="email" name="email" placeholder="Usuari" /><br>
                        <input type="password" name="password" placeholder="Contrasenya" />
                        <br>
                        <a href="#" class="recpass" style="color:white;font-size: 20px;display:block"><u>Recuperar
                                contrasenya</u></a>
                        <input type="submit" value="LOGIN" class="login-button" />
                        <br>
                    </form>
                </div>
            </div>
            <div class="col-xl-4 col-md-2 col-0"></div>
        </div>
    </div>
    <script>
    function validarForm() {
        document.getElementsByName("email")[0].value = btoa(document.getElementsByName("email")[0].value);
        document.getElementsByName("email")[0].style.visibility = "hidden";
        document.getElementsByName("password")[0].style.visibility = "hidden";
        document.getElementsByName("password")[0].innerHTML = "";
        document.getElementsByName("email")[0].innerHTML = "";
    }
    </script>
</body>

</html>