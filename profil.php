<?php
//buat supaya jika belum login tidak bisa mengakses halaman profil
session_start();
if(!isset($_SESSION['login'])){
  header("Location: index.php");
  exit;
}else{
  $email = $_SESSION['email'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family:sans-serif; 
            background-color: #f8f9fa; 
            margin: 0; 
            padding: 0; 
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 100vh;
        }

        .container {
            display: grid;
            flex-direction: column; 
            align-items: center;
            text-align: center; 
            flex-grow: 1;
        }

        .profile-img {
            width: 200px;
            height: 200px; 
            object-fit: cover;
            border-radius: 50%; 
            margin-top: 20px;   
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .nama {
            margin-top: 15px;
            font-size: 24px; 
            font-weight: bold; 
        }
        
        footer {
            background: linear-gradient(180deg, #9EC5FE 38.54%, rgba(158, 197, 254, 0.00) 100%);
            color: #fff; 
            padding: 20px 0; 
            width: 100%; 
            text-align: center; 
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="profile">
            <img src="img/profile.svg" class="profile-img" />
            <h1 class="nama"><?php
            echo $email;
            ?>
            </h1> 
            <form action="logout.php">
              <button type="submit" class="mt-4 btn btn-danger">Logout</button>
            </form>
            
        </div>
        
    </div>
    

    <footer>
        <p>Contact: <a href="mailto:@example.com">kelompok@student.ub.ac.id</a></p>
        <p>&copy; 2024 Case 3 Pemweb E. All rights reserved.</p>
    </footer>
</body>
</html>

