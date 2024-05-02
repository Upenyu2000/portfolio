<DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Home</title>
    

</head>
<body>
    <a href="http://localhost/home"><img class="logo" src="{{URL('images/logo.png')}}" alt=""></a>

    <div class="navbar">
        <nav>
        <a href="http://localhost/home" class="active">
            Home
        </a>
        
        <a href="http://localhost/post">
            Post
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
    <section class="hero">
            <h1>About Me</h1>
            <br>
            <p class= "intro">Hello, I'm Upenyu, a versatile professional in the realms of software development and data analysis. 
                Over the years, I've delved into various projects, showcasing my expertise in fields such as object recognition, human skeleton analysis, and web application development. 
                With a passion for innovation and problem-solving, I thrive on bringing ideas to life through code and data insights. 
                Explore my journey and the projects I've undertaken to witness firsthand the fusion of technology and creativity in action.</p>
        </section>

    </div>
    
</body>

<style>
    *{
        font-family: "Kode Mono", monospace;
        color:black;
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
        padding-top:25vh;
        margin:auto;
    }    
    
    .hero{
        z-index:-1;

    }




    .intro{
        color:black;
        font-size:20px;

    }

    .two{
        background-image:url("{{URL('images/chat.jpg')}}");
        background-size: 300px 300px;
        background-opacity:0.5;

    }

    </style>
</html>
