<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>GEMA XX | Login </title>

    <!-- favicon.ico -->
    <link rel="icon" href="{{ asset("assets/gent/") }}/images/favicon.ico" type="image/ico" /> 
    <!-- Bootstrap -->
    <link href="{{ asset('assets/gent') }}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/gent') }}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets/gent') }}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('assets/gent') }}/vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/gent') }}/build/css/custom.min.css" rel="stylesheet">
    <!-- Custom CSS -->    
    <link href="{{ asset('assets/gent') }}/custom/component.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <img src="{{ asset('assets/gent/images/gema-med.png') }}" alt="" />
            <form name="formLogin" action="{{ url('login') }}" method="post">
              <h1>Login</h1>
              {{ csrf_field() }}
              <div>
                <input type="text" class="form-control" name="username" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="javascript:{}" onClick="document.formLogin.submit(); return false;">Log in</a>
                <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> <u>Create Account</u> </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <p>©2018 All Rights Reserved. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <img src="{{ asset('assets/gent/images/gema-med.png') }}" alt="" />
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"><u>Log in</u> </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <p>©2018 All Rights Reserved. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>