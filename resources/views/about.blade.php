<DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>About</title>
    

</head>
<body>
    <header class="logo">Upenyu Folio
</header>
    <div class="navbar">
        <nav>
        <a href="http://localhost/home">
            Home
        </a>
        
        <a href="http://localhost/chat">
            Chat
        </a>

        <a href="http://localhost/about">
            About
        </a>

        <a href="http://localhost/contact">
            Contact
        </a>
        </nav>
    </div>
    <div class="space">  </div>

    <div class="pages">
    <section class="zero">
            <h1>Home</h1>
        </section>

        <section class="one">
            <h1>About</h1>
        </section>
        
        <section class="two">
            <h1>Chat</h1>
        </section>

    </div>
    
</body>

<style>
    *{
        font-family: "Kode Mono", monospace;
        color:white;
        text-decoration:none;
        word-spacing:4px;
    }

    body{ 
        background-image: url("https://images6.alphacoders.com/129/1299626.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position:center;
        opacity: 0.8;
        overflow-x:hidden;
        z-index:-1;
    }


    a{
        font-size:23px;
        color:white;
        padding-top:1px;
        word-spacing:6px;
        

    }

    a:hover{
        
        color: yellow;
        font-size:25px;
        position:center;
        text-shadow:0px 1px 3px grey;
        text-decoration-line: underline;
        text-underline-position:center;
        text-underline-offset: 8px;
        word-spacing:6px;
    }

    .logo{
        font-weight:bold;
        color:white;
        font-size:35px;
        padding:20px;
        float:left;
    }

    .logo:hover{
        color:yellow
    }

    .navbar{
        float:right;
        font-weight:bold;
        padding:30px;
    }

    .space{
        height:20vh;
    }

    section{
        color: white;
        height: 60vh;
        display:flex;
        justify-content:center;
        padding-top:60vh;
        margin:auto;

    }    
    .zero{
        background-color:purple;
        z-index:-1;

    }


    .one{
        background-color:pink;

    }

    .two{
        background-color:blue;
        
    }

    </style>
</html>
