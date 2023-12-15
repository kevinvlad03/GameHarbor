<header>

    <nav>
        <ul class="nav-links">
            <li><a href="index.php">Home
                    <i class="fa-solid fa-home"></i>
                </a></li>
            <li><a href="#">News
                    <i class="fa-solid fa-newspaper"></i>
                </a></li>
            <li><a href="#">About
                    <i class="fa-solid fa-gears"></i>
                </a></li>
        </ul>
    </nav>

    <div class="logo">
        <a href="#" class="logo">
            <i class="fa-solid fa-anchor"></i>
        </a>
    </div>


    <?php
    session_start();
    if (isset($_SESSION["username"])) {
        ?>
        <nav>
            <ul class="nav-links">
                <li><a href="#">Profile
                        <i class="fa-solid fa-user"></i>
                    </a></li>
                <li><a href="/logout.php">Logout
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </a></li>
                <li><a href="profile.php">
                        <i class="fa-solid fa-circle-user fa-xl"></i>
                    </a></li>
            </ul>
        </nav>
        <?php
    } else {
        ?>
        <nav>
            <ul class="nav-links">
                <div class="login-register">
                    <li><a href="login.php">Login
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        </a></li>
                    <li><a href="register.php">Register
                            <i class="fa-solid fa-right-to-bracket fa-rotate-270"></i>
                        </a></li>
                    <li><a href="profile.php">
                            <i class="fa-solid fa-circle-user fa-xl"></i>
                        </a></li>
                </div>
            </ul>
        </nav>
        <?php
    }
    ?>


</header>