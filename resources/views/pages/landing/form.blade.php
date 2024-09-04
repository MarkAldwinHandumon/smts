
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Flat Able - Premium Admin Template by Phoenixcoded</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">
	
	


</head>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content text-center" style="width: 20%;">
		<div class="card borderless">
			<div class="row align-items-center text-center">
    
				<div class="col-md-12">
                    <form method="POST" action="{{ route('register') }}">
                    @csrf
					<div class="card-body">
						<h4 class="f-w-400">Sign up</h4>
						<hr>

                        <div>
                            <x-text-input id="first_name" class="form-control" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="name" placeholder="Name" />
                            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                        </div>
                   

                        <div class="mt-4">
                            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username"  placeholder="Email Address"/>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" placeholder="Password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
					
                        <div class="mt-4">
                            <x-text-input id="password_confirmation" class="form-control" type="password"  name="password_confirmation" required autocomplete="new-password"  placeholder="Confirm Password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                        <br>
                        
                        <x-primary-button class="btn btn-primary btn-block mb-4">
                            {{ __('Register') }}
                        </x-primary-button>
						<hr>

						<p class="mb-2">Already have an account? <a href="{{ route('login') }}" class="f-w-400">Signin</a></p>

					</div>
                    </form>
				</div>
          
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>

<script src="assets/js/pcoded.min.js"></script>



</body>

</html>