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
    h1{
        font-size: 5rem; /* Adjusted font size for responsiveness */
        color: #53A700;
        max-width: 1000px; /* Added max-width for smaller screens */
        text-align: center;
        font-family: 'gab';
    } .next-btn {
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
</style>
<body>
    <h1>Registration Complete</h1>
    
    <a href="register.php"><button class="next-btn">Let's Learn</button></a>
</body>
