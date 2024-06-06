<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentication</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                <h4>Login form</h4>
                <hr>
                <form action="{{route('login-user')}}" method="post">
                  @if (Session::has('success'))
                      <div class="alert alert-success">{{Session::get('success')}}</div>
                  @endif
                  @if (Session::has('fail'))
                      <div class="alert alert-danger">{{Session::get('fail')}}</div>
                  @endif
         
                  @csrf
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" 
                    placeholder="Enter Email" name="email" value="{{old('email')}}">
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                  </div>

                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" 
                    placeholder="Enter Password" name="password" value="">
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                  </div> 

                  <div class="form-group">
                    <br>
                     <button class="btn btn-block btn-primary" type="submit">
                        Login
                     </button>
                  </div>
                  <br>
                  <a href="registration">New user !! Register here</a>
                </form>
            </div>
        </div>
    </div>
</body>

<script src="">
   
</script>
</html>