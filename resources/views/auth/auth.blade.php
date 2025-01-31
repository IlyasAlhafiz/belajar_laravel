<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup Form</title>
    <link rel="stylesheet" href="{{ asset('css/SignUp_LogIn_Form.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <div class="form-box login">
        <div class="toggle-button">
            <a href="{{ route('home') }}"><i class='bx bx-chevron-right-circle'></i></a>
        </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Login</h1>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="input-box">
                    <input id="email" type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email" autofocus class="@error('email') is-invalid @enderror">
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box">
                    <input id="password" type="password" name="password" placeholder="Password" required autocomplete="current-password" class="@error('password') is-invalid @enderror">
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <div class="forgot-link">
                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                </div>

                <button type="submit" class="btn">Login</button>
                <p>or login with social platforms</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-google'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                </div>
            </form>
        </div>
          
        <div class="form-box register">
        <div class="toggle-button">
            <a href="{{ route('home') }}"><i class='bx bx-chevron-left-circle'></i></a>
        </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1>Registration</h1>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="input-box">
                    <input id="name" type="text" name="name" placeholder="Username" value="{{ old('name') }}" required autocomplete="name" autofocus class="@error('name') is-invalid @enderror">
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box">
                    <input id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" class="@error('email') is-invalid @enderror">
                    <i class='bx bxs-envelope'></i>
                </div>

                <div class="input-box">
                    <input id="password" type="password" name="password" placeholder="Password" required autocomplete="new-password" class="@error('password') is-invalid @enderror">
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <div class="input-box">
                    <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password" class="@error('password_confirmation') is-invalid @enderror">
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <button type="submit" class="btn">Register</button>
                <p>or register with social platforms</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-google'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                </div>
            </form>
        </div>

        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>Hello, Welcome!</h1>
                <p>Don't have an account?</p>
                <button class="btn register-btn">Register</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Welcome Back!</h1>
                <p>Already have an account?</p>
                <button class="btn login-btn">Login</button>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/SignUp_LogIn_Form.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
  const isLoggedIn = {{ auth()->check() ? 'true' : 'false' }};
</script>
<script>
  const isLoggedIn = {{ auth()->check() ? 'true' : 'false' }};
  document.addEventListener('DOMContentLoaded', function() {
    const chevronButton = document.querySelector('.toggle-button a');
    
    chevronButton.addEventListener('click', function(event) {
      event.preventDefault();
      if (!isLoggedIn) {
        Swal.fire({
          title: 'Anda belum login!',
          text: 'Silakan login terlebih dahulu untuk melanjutkan.',
          icon: 'error',
          confirmButtonText: 'Login'
        });
      } else {
        window.location.href = chevronButton.href;
      }
    });
  });
</script>
</body>
</html>
