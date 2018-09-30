<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GEMA XX | Page not found</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100|Montserrat:100" rel="stylesheet">
    <style>
        .restricted {
            font-family:'Montserrat',sans-serif;
            text-align: center;
            letter-spacing: 1px;
            text-transform: uppercase;
            position:absolute;
            top:40%;
            left:50%;
            transform:translate(-50%,-50%);
        }
        p { font-weight:bold; }
    </style>
</head>
<body>
    <div class="restricted">
        <h1>Restricted Page !</h1>
        @include('templates.feedback')
    </div>
    <!-- <div id="message"></div>
    <input class="input">
    <button class="btnSubmit">Submit</button>
    <div id="message-2"></div> -->

    <script src="{{ asset("assets/gent") }}/vendors/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript">
        setTimeout(() => {
           window.location.href = window.history.back(); 
        }, 1000);
        
        // $(document).ready(function(){

        //     var url = "{{ url('/get_data') }}";
        //     $.get(url).then(function(data){
        //         $('#message').html("Tanggal : " + data.date + " | " + data.event);
        //     });
        //     // var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        //     $.ajaxSetup({
        //         headers : {
        //             'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });

        //     $('.btnSubmit').click(function(){
        //         $.ajax({
        //             url : "{{ url('/post_data') }}",
        //             type : 'POST',
        //             data : { 'msgData': $('.input').val() },
        //             dataType : 'JSON',
        //             success : function(data){
        //                 $('#message-2').append(data.msg);
        //             },
        //         });
        //     });
        // });

    </script>
</body>
</html>