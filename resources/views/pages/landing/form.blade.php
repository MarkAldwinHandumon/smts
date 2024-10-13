<!DOCTYPE html>
<html lang="en">

<head>
    <title>SMST - St. Martha Skills Training And Assement Center Inc</title>
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
                <div class="col-lg-8 col-md-6 col-sm-8">
                    <div class="card borderles">
                        <div class="card-body">
                            <h4 class="text-center f-w-400">Sign up</h4>
                            <hr>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>First Name</label>
                                    <x-text-input id="first_name" class="form-control" type="text" name="first_name"
                                        :value="old('first_name')" required autofocus autocomplete="first_name" placeholder="First Name" />
                                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Middle Name</label>
                                    <input type="text" class="form-control"  name="middle_name" placeholder="Middle Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" required autofocus autocomplete="last_name" name="last_name" placeholder="Last Name">
                                </div>
                            </div>

                                <div class="form-group">
                                    <input type="text" id="phone" class="form-control" name="phone":value="old('phone')" required autocomplete="phone" placeholder="09512348350" required maxlength="12">
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
  const phoneInput = document.getElementById('phone');
  const phonePattern = /^0\d{11}$/; // Matches a string that starts with '0' and followed by 11 digits (total 12 digits)

  // Input event listener for real-time validation
  phoneInput.addEventListener('input', function() {
    // Remove non-numeric characters
    this.value = this.value.replace(/[^\d]/g, '');
    
    // Check if the current value matches the phone number format
    const value = phoneInput.value;
    if (phonePattern.test(value)) {
      phoneInput.classList.add('valid');
      phoneInput.classList.remove('invalid');
    } else {
      phoneInput.classList.add('invalid');
      phoneInput.classList.remove('valid');
    }
  });

  // Form submission handling
  // const phoneForm = document.getElementById('phone-form');
  // phoneForm.addEventListener('submit', function(event) {
  //   if (!phonePattern.test(phoneInput.value)) {
  //     event.preventDefault(); // Prevent form submission if invalid
  //     alert('Please enter a valid phone number in the format 09512348350.');
  //   }
  // });

  // Auto-fill boy and girl therapist fields based on total persons
  const totalPersonInput = document.querySelector('input[name="total_person"]');
  const boyTherapistInput = document.querySelector('input[name="boy_therapist"]');
  const girlTherapistInput = document.querySelector('input[name="girl_therapist"]');

  // Update boy and girl therapists based on total persons
  totalPersonInput.addEventListener('input', function() {
    const total = parseInt(this.value) || 0; // Get the total person input
    // Calculate the values for boy and girl therapists
    const boys = Math.floor(total / 2); // Half for boys
    const girls = Math.ceil(total / 2);  // Half for girls (rounded up)

    // Set the values in the inputs
    boyTherapistInput.value = boys;
    girlTherapistInput.value = girls;
  });

  // Adjust the number of girls based on boys input
  boyTherapistInput.addEventListener('input', function() {
    const total = parseInt(totalPersonInput.value) || 0;
    const boys = parseInt(this.value) || 0; // Get current boys input
    const girls = Math.max(0, total - boys); // Calculate girls as total - boys

    // Check if the total exceeds the limit
    if (boys + girls > total) {
      boyTherapistInput.value = Math.floor(total / 2);
      girlTherapistInput.value = Math.ceil(total / 2);
    } else {
      girlTherapistInput.value = girls; // Set the new girls value
    }
  });

  // Adjust the number of boys based on girls input
  girlTherapistInput.addEventListener('input', function() {
    const total = parseInt(totalPersonInput.value) || 0;
    const girls = parseInt(this.value) || 0; // Get current girls input
    const boys = Math.max(0, total - girls); // Calculate boys as total - girls

    // Check if the total exceeds the limit
    if (boys + girls > total) {
      boyTherapistInput.value = Math.floor(total / 2);
      girlTherapistInput.value = Math.ceil(total / 2);
    } else {
      boyTherapistInput.value = boys; // Set the new boys value
    }
  });
});
    </script>
</body>

</html>
