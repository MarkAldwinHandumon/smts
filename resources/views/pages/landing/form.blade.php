<!DOCTYPE html>
<html lang="en">

<head>
    <title>Flat Able - Premium Admin Template by Phoenixcoded</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- [ auth-signup ] start -->
    <div class="auth-wrapper d-flex align-items-center justify-content-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="card borderless">
                        <div class="card-body">
                            <h4 class="text-center f-w-400">Sign up</h4>
                            <hr>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <x-text-input id="first_name" class="form-control" type="text" name="first_name"
                                        :value="old('first_name')" required autofocus autocomplete="name" placeholder="Name" />
                                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                                </div>

                                <div class="form-group">
                                    <x-text-input id="email" class="form-control" type="number" name="phone"
                                        :value="old('phone')" required autocomplete="phone" placeholder="Phone number" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <div class="form-group">
                                    <x-text-input id="email" class="form-control" type="email" name="email"
                                        :value="old('email')" required autocomplete="username" placeholder="Email Address" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>


                                <div class="form-group">
                                    <x-text-input id="password" class="form-control" type="password" name="password"
                                        required autocomplete="new-password" placeholder="Password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <div class="form-group">
                                    <x-text-input id="password_confirmation" class="form-control" type="password"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Confirm Password" />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <button type="submit" class="btn btn-primary btn-block mb-4">
                                    {{ __('Register') }}
                                </button>
                            </form>

                            <hr>
                            <p class="text-center mb-2">Already have an account? <a href="{{ route('login') }}"
                                    class="f-w-400">Sign In</a></p>
                        </div>
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
