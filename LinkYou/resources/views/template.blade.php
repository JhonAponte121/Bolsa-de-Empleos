<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- import local CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- import element CSS -->
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <!-- import Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <!-- import Font  -->
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <!-- import ImgUr CSS  -->
    <link href="Img Upload/css/style.css" rel="stylesheet" media="screen">
    <link href="Img Upload/css/mobile-style.css" rel="stylesheet" media="screen">
        <link href="View.css"  rel="stylesheet" type="text/css">
    <title>Postear</title>

    
</head>
<body>
    @yield('content')

    
</body>
<!-- import Vue.js -->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<!-- import element JavaScript -->
<script src="https://unpkg.com/element-ui/lib/index.js"></script>
<!-- inport local JavaScript -->
<script src="01.js"></script>
<!-- import ImgUr JavaScript -->
<script type="text/javascript" src="Img Upload/js/imgur.js"></script>
<script type="text/javascript" src="Img Upload/js/upload.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
<script src="Component.js"></script>
<script src="https://unpkg.com/element-ui/lib/index.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/ViewJob.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/Admin.js') }}"></script>
</html>