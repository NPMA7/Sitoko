<head>
    <title>Register</title>
     <link rel="stylesheet" href="public/css/register.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
     <script src="public/js/function.js"></script>
    <link rel="icon" href="public/img/icon.png">
</head>

        

<div id="wrapper">
    <label for="email"><div class="logo-box">
    <img src="public/img/logo-store.png" alt="" height="500" width="500">
    </div></label>
    
<div class="wrapper">
        <form method="POST" action="{{ route('register') }}">
            @csrf
  <div class="form-register">
        <div class="navbar">
		    <div class="nav">
			    <a class="add" href="{{ url('../') }}"><i class="fa fa-arrow-left"></i></a>
				<a class="add" href="{{ route('register') }}" >Register</a>
               
			
			</div>
		    	 <a class="signup" href="{{ route('login') }}">Login</a>
	    </div>
        <div class="signup-box">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <!-- Name -->
            <div class="form-field">
				<label for="name" :value="__('Name')" ><span class="fas fa-id-card"></span></label>
				<input type="text" placeholder="Name" name="name" id="name" :value="old('name')" required autofocus />
            </div>
            <!-- Username -->
            <div class="form-field">
				<label for="username" :value="__('Username')"><span class="fas fa-user"></span></label>
				<input type="text" placeholder="Username" name="username" id="username" :value="old('username')"  required />
			</div>
            <!-- Email Address -->
            <div class="form-field">
				<label for="email" :value="__('Email')"><span class="fas fa-mail-bulk"></span></label>
				<input type="email" placeholder="Email" name="email" id="email" :value="old('email')" required/>
			</div>
            <!-- Phone Numbers -->
            <div class="form-field">
				 <label for="hp"><span class="fas fa-mobile-alt"></span></label>
				<input type="number" placeholder="No Handphone" id="hp" name="phone" required/> 
			</div>
            <!-- Password -->
            <div class="form-field">
				<label for="pass" :value="__('Password')" ><span class="fas fa-key"></span></label>
				<input type="password" id="pass" placeholder="Password"
                                name="password"
                                required autocomplete="new-password" />
				<i onclick="togglepass()" class="fas fa-eye" id="togglepass" ></i>
			</div>	
            <!-- Confirm Password -->
            <div class="form-field">
                <label for="pwd" :value="__('Confirm Password')"><span class="fas fa-key"></span> </label>

                <input id="pwd" placeholder="Confirmation Password"
                                type="password"
                                name="password_confirmation" required />
                <i onclick="togglepwd()" class="fas fa-eye" id="togglepwd" ></i>
            </div>
            
            <!-- <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}        
                </a> 
            </div>-->
            <div class="submit-button">
				<button name="daftar">{{ __('Register') }}</button>    
            </div>
    </div>
        </form>
</div>
</div>