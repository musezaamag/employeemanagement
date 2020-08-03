<!DOCTYPE html>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0" nonce="ycEo3BKc"></script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap');
</style>
<html lang="en">
<head>
@include('includes.head')
</head>
<body>
@include('includes.menu')
    @yield('content')
@include('includes.foot')
</body>
</html>