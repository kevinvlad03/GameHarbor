
<header>

    <nav>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </nav>

    <a href="#" class="logo">
        <i class="fa-solid fa-anchor"></i>
    </a>

    <?php
    session_start();
    if (isset($_SESSION["username"])) {
    ?>
        <nav>
            <ul class="nav-links">
                <li><a href="#">Profile</a></li>
                <li><a href="/logout.php">Logout</a></li>
            </ul>
        </nav>
    <?php
    }
    else {
    ?>
        <nav>
        <ul class="nav-links">
            <div class="login-register">
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </div>  
        </ul>
        </nav>
    <?php
    }
    ?>
    
    
</header>
