<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="home">
            <img src="/Travel%20Blog/assets/images/favicon.png" width="30" height="30" class="rounded me-2" alt="Logo" title="TraveLog">
            TraveLog
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'home' ? 'active' : ''; ?>" href="/Travel%20Blog/home">
                        <i class="fa fa-home me-1"></i> Home 
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'blog' ? 'active' : ''; ?>" href="/Travel%20Blog/blog">
                        <i class="fa fa-blog me-1"></i> Blogs 
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'contact' ? 'active' : ''; ?>" href="/Travel%20Blog/contact">
                        <i class="fa fa-address-book me-1"></i> Contact
                    </a>
                </li>

                <?php if (isset($_SESSION['name'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">
                        <i class="fa fa-user me-1"></i> <?= htmlspecialchars($_SESSION['name']); ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout">
                        <i class="fa fa-sign-out-alt"></i> Logout
                        </a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'register' ? 'active' : ''; ?>" href="register">
                            <i class="fa fa-sign-in me-1"></i> Register
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>