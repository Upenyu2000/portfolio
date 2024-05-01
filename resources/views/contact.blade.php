<DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>About</title>
    

</head>
<body>
    <a href="http://localhost/home"><img class="logo" src="{{URL('images/logo.png')}}" alt=""></a>

    <div class="navbar">
        <nav>
        <a href="http://localhost/home" >
            Home
        </a>
        
        <a href="http://localhost/chat">
            Chat
        </a>

        <a href="http://localhost/about" >
            About
        </a>

        <a href="http://localhost/contact" class="active">
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
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position:center;
        opacity: 0.8;
        overflow-x:hidden;
        z-index:-1;
    }


    a{
        font-size:26px;
        color:black;
        padding-top:1px;
        word-spacing:6px;
        

    }

    a:hover{
        transition: all 0.3s ease 0s;
        color: red;
        font-size:26px;
        position:center;
        text-shadow:0px 1px 3px grey;
        text-decoration-line: underline;
        text-underline-position:center;
        text-underline-offset: 8px;
        word-spacing:6px;
        text-decoration:none;
        font-weight:500;
    }
    .active{
        font-size:26px;
        color:red;
    }

    .logo{
        font-weight:bold;
        color:black;
        float:left;
        width: 110PX;
        height: 110px;

    }


    .navbar{
        float:right;
        font-weight:bold;
        padding:30px;
        text-decoration:none;
    }

    .space{
        height:20vh;
        width:20px;
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
