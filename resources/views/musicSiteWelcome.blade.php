<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>John Hernandez Music</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            animation: fadeInAnimation ease 3s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
        }

        @keyframes fadeInAnimation {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;

        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .padBottom {
            padding-bottom: 100px;
        }

        .padTop {
            padding-top: 100px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">

        <div class="padTop"></div>

        <div>
            <img id="profile" src="{{URL::asset('/images/JohnBlackAndWhitePortrait.png')}}" alt="John Hernandez" height="500" width="500">
        </div>

        <div class="title m-b-md">
            John Hernandez
        </div>

        <div class="links">
            <a href="https://johnhernandezsoundslike.bandcamp.com/">Bandcamp</a>
            <a href="https://open.spotify.com/artist/0doCKVjriCi111XOBkRorK">Spotify</a>
            <a href="mailto: jnhernandez2.0@gmail.com">Contact</a>
        </div>

        <div class="padBottom"></div>

    </div>
</div>
</body>
<script>
    $(document).ready(function(){
        $("a").hover(function(){
            $(this).css("color", "yellow");
        }, function() {
            $(this).css("color", "#636b6f");
        });

        $("#profile").hover(function(){
            $(this).attr('src','/images/JohnColorPortrait.png');
        }, function() {
            $(this).attr('src','/images/JohnBlackAndWhitePortrait.png');
        });
    });
</script>
</html>

