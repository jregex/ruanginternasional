<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$title}} | Ruang Internasional</title>

    <link rel="icon" href="{{ asset('assets/user') }}/images/logo/Ruang Internasional.png" />

    <!-- Bootstrap -->
    <link href="{{ asset('assets/admin') }}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/admin') }}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/admin') }}/build/css/custom.min.css" rel="stylesheet">
  </head>



  <body>
    <div>

      <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
              @if (session()->has('failed'))
                  <div class="alert alert-danger" role="alert">
                      {{ session()->get('failed') }}
                  </div>
              @endif

            <form method="POST" action="{{ route('login-act') }}">
                @csrf
              <h1 class="text-white">Login Form</h1>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Username/Email" autofocus/>
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" />
              </div>
              <div>
                <button class="btn btn-success btn-block submit text-white" type="submit">Log in</button>
              </div>

              <div class="clearfix"></div>
              <div class="separator">

                  <div class="clearfix"></div>
                  <br />

                  <div class="text-white">
                      <h1><i class="fa fa-lock"></i> Ruang Internasional</h1>
                      <p>©{{date('Y')}} Ruang Internasional</p>
                    </div>
                </div>
            </form>

          </section>
        </div>


      </div>
    </div>
  </body>
</html>
