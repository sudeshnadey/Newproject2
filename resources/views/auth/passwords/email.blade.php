
{{-- @include('layouts.app') --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

</head>
<body>
    <div id="auth">
        <div class="row">
            <div class="col-lg-5 col-12">
                <div>
                   
                    <h1 >Forgot Password</h1>
                    <p class="auth-subtitle">Input your email and we will send you reset password link.</p>
                    @if (session('message'))
                        <div class="text-success text-center" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <br>
                    <form class="md-float-material" method="POST" action="/forget-password">
                        @csrf
                        <div class="form-group position-relative ">
                            <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }} " placeholder="Email Address">
                          
                            @error('email')
                                <span role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Send</button>
                    </form>
                    <div class="text-center">
                        <p >Remember your account? <a href="{{ route('login') }}" class="font-bold">Login</a>.</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

</body>
</html>
