<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}?>
<link rel="stylesheet" href="css/dashboard.css">
<nav>
    <div class="logo">
        <a href="dashboard.php"><img src="images/logo.png" alt="Dashboard Logo" style="height: 120px; margin-top:40px"/></a>
    </div>
    <div class="nav-items">
        <ul class="centered">
            <li><a href="tournaments.php"><i class="fas fa-trophy"></i> Tournaments</a></li>
            <li><a href="teams.php"><i class="fas fa-users"></i> Teams</a></li>
            <li><a href="leaderboard.php"><i class="fas fa-chart-bar"></i> Leaderboard</a></li>
        </ul>
        <ul class="right">
            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            <?php else: ?>
                <li><a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
