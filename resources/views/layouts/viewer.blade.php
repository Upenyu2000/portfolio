<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @livewireStyles
    <title>Post</title>
</head>
<body>
    <a href="http://localhost/home"><img class="logo" src="{{URL('images/logo.png')}}" alt=""></a>

    <div class="navbar">
        <nav>
        <a href="http://localhost/home">
            Home
        </a>
        
        <a href="http://localhost/post" class="active">
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
    <div class='session'></div>
        @if ($errors ->any())
                        <ul style="color: white;">Errors: {{$errors}}</ul>
        @endif

        @if (session('message'))
            <p><b>{{session('message')}}</b></p>
        @endif
    </div>
    <livewire:counter class='livewire'/>
    <section class="hero">
        <h1>@yield('title')</h1>
        <div>
            @yield('content')
            @yield('styles')
        </div>
    </section>
    @livewireScripts
</body>


<style>
    *{
        font-family: "Kode Mono", monospace;
        color:black;
        text-decoration:none;
        word-spacing:4px;
    }
    .livewire{
        color: white;
    }

    body{
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position:center;
        opacity: 0.8;
    }
    .session{
        color:white;
        padding-top:20vh;
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
        color:white;
        padding:30px;
        text-decoration:none;
    }

    section{
        color: white;
        height: 60vh;
        display:flex;
        justify-content:center;
        padding-top:10vh;
        margin:auto;

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
