<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="container">
        <div class="process"></div>
        <div class="logo"><h1 class="logo-txt">Agri-Learn</h1></div>
        <div class="btn">
            <a href="rstep2.php" type="submit" name="next-link">
                <button class="next-btn" name="next-link" type="submit">Let's Get Started</button>
            </a>
        </div>
    </div>
</body>
</html>

<style>
 @font-face {
    font-family: 'gab'; /* You can choose any name for your font */
    src: url('Typo_Round_Bold_Demo.otf') format('opentype');
}

    body, html {
        margin: 0;
        padding: 0;
        height: 100%;
    }

    .container {
        background-color: #faf9f6;
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .next-btn {
        background-color: #070504;
        color: #F5FFFA;
        padding: 10px; 
        border-radius: 30px;
        height: 50px;
        width: 80%; /* Adjusted width for responsiveness */
        width: 500px;
        max-width: 5000px; /* Added max-width for smaller screens */
        font-family:'gab';
        transition: background-color 1s ease-in-out; /* Transition for smooth gradient change */
    }.next-btn:hover {
            background: linear-gradient(to right, #53A700, #070504); /* Updated gradient on hover */
            transition: 1s;
        }
    a{
        text-decoration: none;
        color: #F5FFFA ;
    }   
    
    .logo {
        margin-top: 20px;
    }

    .logo-txt {
        font-size: 5rem; /* Adjusted font size for responsiveness */
        color: #53A700;
        max-width: 1000px; /* Added max-width for smaller screens */
        text-align: center;
        font-family: 'gab';
    }

    @media (max-width: 768px) {
        /* Adjust styles for smaller screens if needed */
        .next-btn {
            width: 90%;
        }
    }
</style>
