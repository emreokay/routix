<html>
<head>
    <link rel="stylesheet" href="{{ asset('vendor/routix/css/routix.css') }}">
</head>
<body>

<div class="login">
    <div class="login-container">
        <div class="login-logo">
            <a class="login-logo-link" href="{{ route('routix.index') }}">
                <span class="login-logo-text">.routix</span>
                <!--<img src="assets/images/logo.svg">-->
            </a>
        </div>
        <div class="login-content">
            <label class="login-input">
                <span class="login-input-title">Username</span>
                <input class="login-input-form" type="text">
            </label>
            <label class="login-input">
                <span class="login-input-title">Password</span>
                <input class="login-input-form" type="password">
            </label>
            <button class="login-button" type="submit">Login</button>
        </div>
    </div>
</div>

</body>
</html>
