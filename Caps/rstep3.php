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
        width: 100%;
        max-height: 80vh;
        height: auto;
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

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: calc(100% - 20px);
        padding: 10px;
        margin-bottom: 5px;
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

    .fill-up {
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
    }

    input {
        
        height: 30px;
    }label{
         font-size: 15px; 
       
    }


    @media only screen and (max-width: 600px) {
        .card-title {
            font-size: 2rem;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            font-size: 0.9rem;
        }
    }

    @media only screen and (max-width: 300px) {
        .card-title {
            font-size: 3rem;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            font-size: 2rem;
            
        }
    }
</style>



<?php
session_start();

// Retrieve the value of the fullname field if submitted
if(isset($_POST["fullname"])){
    $name = $_POST["fullname"];
    // You can perform further processing or store it in a session variable if needed
    $_SESSION["name"] = $name;
}  
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>
<h1 class="step">Step 1</h1>
    <div class="container">
       
        <form action="complete.php" method="post">
            <div class="card">
                <div class="card-content">
                <h2 class="card-title">Hi, <?php  echo $name; ?>!
                <hr>
                    
                
                <br><br>
                <div class="fill-up">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="password">
                    <label for="confirm" class="con">confirm Password</label>
                    <input type="password" name="confirmpassword" placeholder="confirm  password">
                

                </div>
                    
                    <br><br><br>
                    <button class="next-btn" type="submit">Next</button>
                </div>
            </div>
        </form>
    </div> 
</body>