
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEllo</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
</head>

<body>
    <div id="auth">
        <div class="row">
            <div class="col-lg-5 col-12">
            
                    <h1 >Reset Password</h1>
                    <p >Input your email to register reset new password.</p>
                    <form method="POST" action="/reset-password">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        
                        <div class="form-group position-relative ">
                            <input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Your Email">
                           
                            @error('email')
                                <span  role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group position-relative">
                            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Choose Password">
                           
                            @error('password')
                                <span role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group position-relative ">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Choose Confirm Password">
                           
                        </div>
                        <button class="btn btn-primary ">Reset Password</button>
                    </form>
                    <div class="text-center>
                        <p >Already have an account? <a href="{{ route('login') }}"
                        class="font-bold">Login</a>.</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>

</html>