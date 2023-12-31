<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    <title>Project</title>
</head>

<body>

    @include('layouts.navigation')
    @yield('content')

    <!-- Bootstrap JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the checkbox and the register button
            const acceptTermsCheckbox = document.getElementById('accept_terms');
            const registerButton = document.getElementById('registerBtn');

            // Initially disable the button
            registerButton.setAttribute('disabled', 'disabled');

            // Add an event listener to the checkbox to enable/disable the button
            acceptTermsCheckbox.addEventListener('change', function() {
                if (acceptTermsCheckbox.checked) {
                    registerButton.removeAttribute('disabled');
                } else {
                    registerButton.setAttribute('disabled', 'disabled');
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
