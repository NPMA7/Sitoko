<head>
    <title>Login</title>
     <link rel="stylesheet" href="/public/css/login.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
     <script src="/public/js/function.js"></script>
     <link rel="icon" href="/public/img/icon.png">
</head>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

<div id="wrapper">
    <label for="email"><div class="logo-box">
    <img src="public/img/logo-store.png" alt="" height="500" width="500">
    </div></label>
    
<div class="wrapper">


<form method="POST" action="{{ route('login') }}">
            @csrf
    <div class="form-login">
        <div class="navbar">
		    <div class="nav">
			    <a class="add" href="{{ url('../') }}"><i class="fa fa-arrow-left"></i></a>
				<a class="add" href="{{ route('login') }}">Login</a>
			
			</div>
		    	<a class="signup" href="{{ route('register') }}" >Register</a>
	    </div>
    <div class="login-box">
     <!-- Validation Errors -->
        <x-auth-validation-errors class="error" :errors="$errors" />
            <!-- Email Address -->
			<div class="form-field">
			    <label for="email" :value="__('Email')"><span class="fas fa-mail-bulk"></span></label>
                <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" :value="old('email')" required autofocus />
           </div>
            <!-- Password -->
            <div class="form-field">
				<label for="pwd" :value="__('Password')" ><span class="fas fa-key"></span></label>
                <input type="password" name="password" id="pwd" placeholder="Password" 
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                <i onclick="togglepwd()" class="fas fa-eye" id="togglepwd" ></i>
            </div>
            <!-- Remember Me -->
            <!-- <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> -->
            
                @if (Route::has('password.request'))
            <div>
				<a href="{{ route('password.request') }}">
                        {{ __('Forgot password') }} 
                </a>
		    </div>
            <div class="submit-button">
				<button type="submit" name="login" >{{ __('Log in') }}</button>
            </div>
            <div class="ping">
                don't have account?<a href="{{ route('register') }}" > Register</a>
			</div>
                @endif
    </div>
    </div>
</form>
    
</div>
</div>
</div>
