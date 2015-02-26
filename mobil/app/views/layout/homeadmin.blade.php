<!DOCTYPE HTML>
<html>
<head>
    <title>BCS</title>
    @include("includes.head")
</head>
<body class="metro" background="{{asset("images/hitam.png")}}">
    @include("includes.navbaradmin")
    <div class="container">
       <div class="margin20">
        <div class="panel bg-white">
            <div class="panel-content">
                @yield("content")
            </div>
        </div>
       </div>
    </div>
    <div class="text-center" style="margin-bottom: 2%">
        Copyright © 2015 BCS Application. 
    </div>
</body>
</html>