<?php
use App\Core\Application;
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">MVC Framework</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                <a class="nav-link" href="/about">About</a>
                <a class="nav-link" href="/blog">Blog</a>
                <a class="nav-link" href="/contact">Contact</a>
            </div>
        </div>
        <?php if (Application::isGuest()): ?>
        <div class="navbar-nav ml-auto">
            <a class="nav-link" href="/login">Login</a>
            <a class="nav-link" href="/register">Register</a>
        </div>
        <?php else: ?>
        <div class="navbar-nav ml-auto">
            <a class="nav-link" href="#">Welcome <?php echo Application::$app->user->getDisplayName() ?></a>
            <a class="nav-link" href="/logout">Logout</a>
        </div>
        <?php endif; ?>
    </div>
</nav>

