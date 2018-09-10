<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GEMA XX | Page not found</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1 style="font-family:'Open Sans',sans-serif;font-weight:300;position:absolute;top:40%;left:50%;transform:translate(-50%,-50%);">Restricted Page !</h1>
    <script type="text/javascript">
        setTimeout(() => {
           window.location.href="{{ url('/kematerian') }}"; 
        }, 1000);
    </script>
</body>
</html>