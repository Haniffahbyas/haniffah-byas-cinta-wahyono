<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Halaman login </title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<style>
 div {
       margin-left      : 100px    ;
       margin-right     : 100px    ;
       background-color : #D3D3D3  ;
       text-align       : center   ;
     }
label {
        margin-left      : 50px   ;
        margin-right     : 50px   :
        background-color : white  ;
        text-align       : center ;
      }
input { 
        margin-left      : 50px    ; 
        margin-right     : 50px    ; 
        background-color : #F0FFF  ; 
        color            : #808080 ;
      }
select {
        margin-left      : 50px  ;    
        margin-right     : 50px  ;    
        background-color : white ;   
       } 
h2  { 
     background-color : #F5FFFA ;
     text-align       : center  ;
     margin-left      : 50px    ;
     margin-right     : 50px    ;
     color            : #808080 ;
    }
body {
    background-color: #778899 ;
    }
</style> 
<body>
  <div class="log">
    <div>
        <form cellpadding="15">
        <h2> Halaman Login </h2>
        <p>
          Hai! Selamat datang dan Semoga harimu menyenangkan :) 
        </p>
        <p>
            <label> Username : </label>
            <input type="text" name="username"  />
        </p>
        <p>
            <label> Password : </label>
            <input type="password" name="password" />
        </p>
        <p>
            <input type="submit" name="submit" value="Login" />
        </p>
        </form>
    <?php 
      if (isset($_POST['submit'])) {
        include 'database.php';
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $cross = mysqli_query($kondisi,"SELECT * from data_admin WHERE username = '".$user."' AND password = '" .$pass."'");
        if(mysqli_num_rows($cek) > 0){
          echo '<script>alert(" Selamat Anda Berhasil Login!")</script>';
        }
        else{
          echo '<script>alert(" Mohon maaf login anda gagal, username atau password anda salah!")</script>';
        }
       } 
    ?>
  </div>
  </div>
</body>
</html>