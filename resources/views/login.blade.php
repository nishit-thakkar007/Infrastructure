<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles.css">
  <title>Login</title>
  <style>
    .a{
      background-repeat: no-repeat;
      background-position: center;
      position: absolute;
    }
    </style>

</head>
<body class="a"style="background-image: url('login.jpg');">
   
  <div class="login-wrapper">
    <form action="/login" method="post" class="form">
    @if(Session::has('success'))
                    
                    {{Session::get('success')}}
                  
                        @endif
                        @if(Session::has('fail'))
                            
                    {{Session::get('fail')}}
                  
                        @endif

	@csrf
      
      <h2>Login</h2>
      <!--<div class="input-group">
        <input type="text" name="loginUser" id="loginUser" required>
        <label for="loginUser">User Name</label>
     </div>-->
	  <div class="input-group">
        <input type="text" name="Email" Placeholder="Email"  required>
        <label for="loginUser">Email</label>
        <span class='text-danger'>
                    @error('email') 
                        {{$message}} 
                    @enderror
                </span>
      </div>
      
      <div class="input-group">
        <input type="password" name="Pwd" Placeholder="Password" id="loginPassword" required>
        <label for="loginPassword">Password</label>
        <span class='text-danger'>
                    @error('pwd') 
                        {{$message}} 
                    @enderror
                </span>
      </div>
      <input type="submit" value="Login" class="submit-btn">
      <a href="#forgot-pw" class="forgot-pw">Forgot Password?</a>
    </form>

    <div id="forgot-pw">
      <form action="" class="form">
        <a href="#" class="close">&times;</a>
        <h2>Reset Password</h2>
        <div class="input-group">
          <input type="email" name="Email" id="email" required>
          <label for="email">Email</label>
        </div>
        <input type="submit" value="Submit" class="submit-btn">
		<br>
                    <a href="/signup">New Registered User !! Login Here.</a> 
      </form>
    </div>
  </div>
</body>
</html>