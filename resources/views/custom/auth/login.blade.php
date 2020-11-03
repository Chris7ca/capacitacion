<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}">
</head>
<body>

    <main class="uk-position-relative uk-container uk-container-large">
        <div class="uk-flex uk-flex-center uk-margin-large-top">
            <div class="uk-width-1-4@xl uk-width-1-3@l uk-width-1-2@m uk-width-2-3@s">
                @error('email')
                    <div class="uk-alert uk-alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <form method="POST" action="{{ route('login.post') }}">
                    @csrf
                    <div class="uk-margin">
                        <label>Usuario</label>
                        <input type="text" class="uk-input" name="username" value="{{ old('email') }}" required>
                    </div>
                    <div class="uk-margin">
                        <label>Contraseña</label>
                        <input type="password" class="uk-input" name="password" required>
                    </div>
                    <div class="uk-margin-medium">
                        <button class="uk-button uk-button-secondary">Acceder</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}"></script>
</body>
</html>
