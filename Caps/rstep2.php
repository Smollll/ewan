<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Example</title>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        @font-face {
    font-family: 'gab'; /* You can choose any name for your font */
    src: url('Typo_Round_Bold_Demo.otf') format('opentype');
}
        body {
            margin: 0;
            font-family: 'gab', sans-serif;
            background-color: #faf9f6;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .container {
            position: relative;
            text-align: center;
        }

        .step {
            font-size: 3rem;
            position: absolute;
            left: 50%;
            top: 0;
            transform: translateX(-50%);
            color: #53A700;
        }

        .card {
            max-width: 500px;
            background-color: #D2CDCD;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin: 20px;
            width: 100%; /* Adjusted width for responsiveness */
            max-height: 80vh; /* Added max-height for responsiveness */
            height: auto; /* Allow the height to adjust based on content */
                
        }

        .card-content {
            padding: 20px;
            margin-bottom: 50px;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .next-btn {
            background-color: #070504;
            color: #F5FFFA;
            padding: 10px;
            border-radius: 30px;
            width: 80%;
            max-width: 300px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .next-btn:hover {
            background: linear-gradient(to right, #53A700, #070504);
        }
    </style>
</head>
<body>   
<h1 class="step">Step 1</h1>
    <div class="container">
        <form method="post">
            <div class="card">
                <div class="card-content">
                    <h2 class="card-title">What's your name?</h2>
                    <input type="text" name="fullname" placeholder="Juan Dela Cruz">
                    <br><br><br>
                    <button class="next-btn" name="next" type="submit" >Next</button>
                </div>
            </div>
        </form>
    </div>
    <?php
$action = "rstep3.php";
if(isset($_POST["next"])){
    $fullname = $_POST['fullname'];
    $san_fullname = filter_var($fullname, FILTER_SANITIZE_STRING);
    $pattfull = "/^[a-zA-Z][a-zA-Z\s.\-]*$/";
    $resname = preg_match($pattfull, $san_fullname);

    if($resname == 1){
        
        header("Location: rstep3.php");
        exit();
    }else{
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Invalid name!',
            text: 'Please check it again carefully!',
        });
    </script>";
    }
}

?>
</body>
</html>

