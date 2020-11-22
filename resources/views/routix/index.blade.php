<html>
<head>
    <link rel="stylesheet" href="{{ asset('vendor/routix/css/routix.css') }}">
    <script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.4.0/build/highlight.min.js"></script>
    <script>document.addEventListener('DOMContentLoaded', function (event) {
            document.querySelectorAll('pre code').forEach(function (block) {
                hljs.highlightBlock(block);
            });
        });
    </script>
<body>

<header class="header">
    <a class="logo" href="{{ route('routix.index') }}">
        <span class="logo-text">.routix</span>
        <!--<img src="assets/images/logo.svg">-->
    </a>
    <div class="session">
        <a href="{{ route('routix.login.index') }}">Login</a>
    </div>
</header>

<div class="masthead">
    <div class="container">
        <div class="masthead-title">Learn</div>
        <div class="masthead-description">Explore our structured learning paths to discover everything you need to know about building for the modern web.</div>
    </div>
</div>

<div class="routes">
    <div class="container">
        <div class="route-lists">
            <div class="route-lists-content">
                <a class="route-lists-item" href="#deneme">
                    <div class="route-lists-item-path get">
                        <div class="route-lists-item-path-method">GET </div>
                        <div class="route-lists-item-path-endpoint">/sirius/transactions/{id}</div>
                    </div>
                </a>
                <a class="route-lists-item" href="#deneme2">
                    <div class="route-lists-item-path delete">
                        <div class="route-lists-item-path-method">DELETE</div>
                        <div class="route-lists-item-path-endpoint">/sirius/transactions/{id}</div>
                    </div>
                </a>
            </div>
        </div>
        <div id="deneme" class="route">
            <div class="route-header">
                <div class="route-header-path get">
                    <div class="route-header-path-method">GET</div>
                    <div class="route-header-path-endpoint">/sirius/transactions/{id}</div>
                </div>
                <div class="route-header-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem blanditiis cupiditate dolorum itaque non rem rerum. Doloribus expedita omnis porro velit voluptatem! Aliquam culpa cum illo quidem sunt vel.
                </div>
            </div>
            <div class="route-parameters">
                <div class="route-parameters-title">
                    <h4 class="route-parameters-title-text">Parameters</h4>
                </div>
                <div class="route-parameters-content">
                    <div class="route-parameters-item">
                        <div class="route-parameters-item-parameter">
                            <h5 class="route-parameters-item-parameter-title">start-date</h5>
                            <p class="route-parameters-item-parameter-text">For Example: <span>2020-02-02</span></p>
                        </div>
                        <div class="route-parameters-item-labels">
                            <div class="route-parameters-item-labels-col">
                                <div class="route-parameters-item-labels-item must required">required</div>
                            </div>
                            <div class="route-parameters-item-labels-col">
                                <div class="route-parameters-item-labels-item where query">query</div>
                            </div>
                            <div class="route-parameters-item-labels-col">
                                <div class="route-parameters-item-labels-item type">string</div>
                            </div>
                        </div>
                    </div>
                    <div class="route-parameters-item">
                        <div class="route-parameters-item-parameter">
                            <h5 class="route-parameters-item-parameter-title">start-date</h5>
                            <p class="route-parameters-item-parameter-text">For Example: <span>2020-02-02</span></p>
                        </div>
                        <div class="route-parameters-item-labels">
                            <div class="route-parameters-item-labels-col">
                                <div class="route-parameters-item-labels-item must optional">optional</div>
                            </div>
                            <div class="route-parameters-item-labels-col">
                                <div class="route-parameters-item-labels-item where body">body</div>
                            </div>
                            <div class="route-parameters-item-labels-col">
                                <div class="route-parameters-item-labels-item type">string</div>
                            </div>
                        </div>
                    </div>
                    <div class="route-parameters-item">
                        <div class="route-parameters-item-parameter">
                            <h5 class="route-parameters-item-parameter-title">start-date</h5>
                            <p class="route-parameters-item-parameter-text">For Example: <span>2020-02-02</span></p>
                        </div>
                        <div class="route-parameters-item-labels">
                            <div class="route-parameters-item-labels-col">
                                <div class="route-parameters-item-labels-item must required">required</div>
                            </div>
                            <div class="route-parameters-item-labels-col">
                                <div class="route-parameters-item-labels-item where path">path</div>
                            </div>
                            <div class="route-parameters-item-labels-col">
                                <div class="route-parameters-item-labels-item type">string</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="route-responses">
                <div class="route-responses-title">
                    <h4 class="route-responses-title-text">Responses</h4>
                </div>
                <div class="route-responses-content">
                    <div class="route-responses-item">
                        <div class="route-responses-item-codes">
                            <div class="route-responses-item-codes-item success">
                                200
                            </div>
                        </div>
                        <div class="route-responses-item-example">
                            <pre><code class="json">{
    "result": "success",
    "message": "Giriş yapma işleminiz başarılı biçimde gerçekleştirildi.",
    "data": {
        "redirect_to": "/sirius/otp/session/sms/send",
        "cell_phone": "0506***3148",
        "token_type": "Bearer",
        "expires_in": 86400,
        "access_token": "..."
    }
}</code></pre>
                        </div>
                    </div>
                    <div class="route-responses-item">
                        <div class="route-responses-item-codes">
                            <div class="route-responses-item-codes-item error">
                                400
                                <span class="route-responses-item-codes-item-sub">35000</span>
                            </div>
                        </div>
                        <div class="route-responses-item-example">
                            <pre><code class="json">{
    "result": "success",
    "message": "Giriş yapma işleminiz başarılı biçimde gerçekleştirildi.",
    "data": {
        "redirect_to": "/sirius/otp/session/sms/send",
        "cell_phone": "0506***3148",
        "token_type": "Bearer",
        "expires_in": 86400,
        "access_token": "..."
    }
}</code></pre>
                        </div>
                    </div>
                    <div class="route-responses-item">
                        <div class="route-responses-item-codes">
                            <div class="route-responses-item-codes-item error">
                                400
                                <span class="route-responses-item-codes-item-sub">35001</span>
                            </div>
                        </div>
                        <div class="route-responses-item-example">
                            <pre><code class="json">{
    "result": "success",
    "message": "Giriş yapma işleminiz başarılı biçimde gerçekleştirildi.",
    "data": {
        "redirect_to": "/sirius/otp/session/sms/send",
        "cell_phone": "0506***3148",
        "token_type": "Bearer",
        "expires_in": 86400,
        "access_token": "..."
    }
}</code></pre>
                        </div>
                    </div>
                    <div class="route-responses-item">
                        <div class="route-responses-item-codes">
                            <div class="route-responses-item-codes-item error">
                                401
                                <span class="route-responses-item-codes-item-sub">35000</span>
                            </div>
                        </div>
                        <div class="route-responses-item-example">
                            <pre><code class="json">{
    "result": "success",
    "message": "Giriş yapma işleminiz başarılı biçimde gerçekleştirildi.",
    "data": {
        "redirect_to": "/sirius/otp/session/sms/send",
        "cell_phone": "0506***3148",
        "token_type": "Bearer",
        "expires_in": 86400,
        "access_token": "..."
    }
}</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="deneme2" class="route">
            <div class="route-header">
                <div class="route-header-path get">
                    <div class="route-header-path-method">GET</div>
                    <div class="route-header-path-endpoint">/sirius/transactions/{id}</div>
                </div>
                <div class="route-header-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem blanditiis cupiditate dolorum itaque non rem rerum. Doloribus expedita omnis porro velit voluptatem! Aliquam culpa cum illo quidem sunt vel.
                </div>
            </div>
            <div class="route-parameters">
                <div class="route-parameters-title">
                    <h4 class="route-parameters-title-text">Parameters</h4>
                </div>
                <div class="route-parameters-content">
                    <div class="route-parameters-item">
                        <div class="route-parameters-item-parameter">
                            <h5 class="route-parameters-item-parameter-title">start-date</h5>
                            <p class="route-parameters-item-parameter-text">For Example: <span>2020-02-02</span></p>
                        </div>
                        <div class="route-parameters-item-labels">
                            <div class="route-parameters-item-labels-col">
                                <div class="route-parameters-item-labels-item must required">required</div>
                            </div>
                            <div class="route-parameters-item-labels-col">
                                <div class="route-parameters-item-labels-item where query">query</div>
                            </div>
                            <div class="route-parameters-item-labels-col">
                                <div class="route-parameters-item-labels-item type">string</div>
                            </div>
                        </div>
                    </div>
                    <div class="route-parameters-item">
                        <div class="route-parameters-item-parameter">
                            <h5 class="route-parameters-item-parameter-title">start-date</h5>
                            <p class="route-parameters-item-parameter-text">For Example: <span>2020-02-02</span></p>
                        </div>
                        <div class="route-parameters-item-labels">
                            <div class="route-parameters-item-labels-col">
                                <div class="route-parameters-item-labels-item must optional">optional</div>
                            </div>
                            <div class="route-parameters-item-labels-col">
                                <div class="route-parameters-item-labels-item where body">body</div>
                            </div>
                            <div class="route-parameters-item-labels-col">
                                <div class="route-parameters-item-labels-item type">string</div>
                            </div>
                        </div>
                    </div>
                    <div class="route-parameters-item">
                        <div class="route-parameters-item-parameter">
                            <h5 class="route-parameters-item-parameter-title">start-date</h5>
                            <p class="route-parameters-item-parameter-text">For Example: <span>2020-02-02</span></p>
                        </div>
                        <div class="route-parameters-item-labels">
                            <div class="route-parameters-item-labels-col">
                                <div class="route-parameters-item-labels-item must required">required</div>
                            </div>
                            <div class="route-parameters-item-labels-col">
                                <div class="route-parameters-item-labels-item where path">path</div>
                            </div>
                            <div class="route-parameters-item-labels-col">
                                <div class="route-parameters-item-labels-item type">string</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="route-responses">
                <div class="route-responses-title">
                    <h4 class="route-responses-title-text">Responses</h4>
                </div>
                <div class="route-responses-content">
                    <div class="route-responses-item">
                        <div class="route-responses-item-codes">
                            <div class="route-responses-item-codes-item success">
                                200
                            </div>
                        </div>
                        <div class="route-responses-item-example">
                            <pre><code class="json">{
    "result": "success",
    "message": "Giriş yapma işleminiz başarılı biçimde gerçekleştirildi.",
    "data": {
        "redirect_to": "/sirius/otp/session/sms/send",
        "cell_phone": "0506***3148",
        "token_type": "Bearer",
        "expires_in": 86400,
        "access_token": "..."
    }
}</code></pre>
                        </div>
                    </div>
                    <div class="route-responses-item">
                        <div class="route-responses-item-codes">
                            <div class="route-responses-item-codes-item error">
                                400
                                <span class="route-responses-item-codes-item-sub">35000</span>
                            </div>
                        </div>
                        <div class="route-responses-item-example">
                            <pre><code class="json">{
    "result": "success",
    "message": "Giriş yapma işleminiz başarılı biçimde gerçekleştirildi.",
    "data": {
        "redirect_to": "/sirius/otp/session/sms/send",
        "cell_phone": "0506***3148",
        "token_type": "Bearer",
        "expires_in": 86400,
        "access_token": "..."
    }
}</code></pre>
                        </div>
                    </div>
                    <div class="route-responses-item">
                        <div class="route-responses-item-codes">
                            <div class="route-responses-item-codes-item error">
                                400
                                <span class="route-responses-item-codes-item-sub">35001</span>
                            </div>
                        </div>
                        <div class="route-responses-item-example">
                            <pre><code class="json">{
    "result": "success",
    "message": "Giriş yapma işleminiz başarılı biçimde gerçekleştirildi.",
    "data": {
        "redirect_to": "/sirius/otp/session/sms/send",
        "cell_phone": "0506***3148",
        "token_type": "Bearer",
        "expires_in": 86400,
        "access_token": "..."
    }
}</code></pre>
                        </div>
                    </div>
                    <div class="route-responses-item">
                        <div class="route-responses-item-codes">
                            <div class="route-responses-item-codes-item error">
                                401
                                <span class="route-responses-item-codes-item-sub">35000</span>
                            </div>
                        </div>
                        <div class="route-responses-item-example">
                            <pre><code class="json">{
    "result": "success",
    "message": "Giriş yapma işleminiz başarılı biçimde gerçekleştirildi.",
    "data": {
        "redirect_to": "/sirius/otp/session/sms/send",
        "cell_phone": "0506***3148",
        "token_type": "Bearer",
        "expires_in": 86400,
        "access_token": "..."
    }
}</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="topics">
    <a href="#" class="topic-item">
        <div class="topic-item-header">
            <div class="topic-item-header-title">Collection</div>
            <div class="topic-item-header-count">18 resources</div>
        </div>
        <div class="topic-item-cover">
            <img src="https://webdev.imgix.net/images/collections/pwa.svg" loading="lazy">
        </div>
        <div class="topic-item-info">
            <h4 class="topic-item-info-title">Progressive Web Apps</h4>
            <p class="topic-item-info-text">Websites that took all the right vitamins</p>
        </div>
    </a>
    <a href="#" class="topic-item">
        <div class="topic-item-header">
            <div class="topic-item-header-title">Collection</div>
            <div class="topic-item-header-count">18 resources</div>
        </div>
        <div class="topic-item-cover">
            <img src="https://webdev.imgix.net/images/collections/metrics.svg" loading="lazy">
        </div>
        <div class="topic-item-info">
            <h4 class="topic-item-info-title">Progressive Web Apps</h4>
            <p class="topic-item-info-text">Websites that took all the right vitamins</p>
        </div>
    </a>
    <a href="#" class="topic-item">
        <div class="topic-item-header">
            <div class="topic-item-header-title">Collection</div>
            <div class="topic-item-header-count">18 resources</div>
        </div>
        <div class="topic-item-cover">
            <img src="https://webdev.imgix.net/images/collections/payments.svg" loading="lazy">
        </div>
        <div class="topic-item-info">
            <h4 class="topic-item-info-title">Progressive Web Apps</h4>
            <p class="topic-item-info-text">Websites that took all the right vitamins</p>
        </div>
    </a>
</div>

</body>
</html>
