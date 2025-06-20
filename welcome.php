<?php
session_start();
include_once('connection.php');
$pageTitle = "Welcome Page";
include_once('header.php');


if (!isset($_SESSION['name']) || !isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<style>
    .welcome-container {
        min-height: 80vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 15px;
        text-align: center;
    }

    .welcome-container span {
        background-color: gold;
        color: white;
        padding: 15px;
        margin: 10px;
        border-radius: 8px;
        font-size: 25px;
        font-weight: 600;
        letter-spacing: 5px;
        text-transform: uppercase;
    }

    .welcome-container .email {
        margin: 20px;
        font-size: 18px;
    }

    .welcome-container .btn {
        width: 150px;
        background-color: gold;
        color: white;
        font-weight: 500;
        letter-spacing: 3px;
        text-transform: uppercase;
        border-radius: 20px;
        text-align: center;
        text-decoration: none;
        padding: 10px;
    }

    .welcome-container .btn:hover {
        width: 200px;
        background-color: darkorange;
        transition: 0.5s;
    }
</style>

<div class="welcome-container">
    <h3>Welcome, <span><?= htmlspecialchars($_SESSION['name']) ?></span></h3>
    <div class="email">Your Email ID is: <strong><?= htmlspecialchars($_SESSION['username']) ?></strong></div>
    <h3>Your profile name is: <span><?= htmlspecialchars($_SESSION['name']) ?></span></h3>
    <br><br>
    <a href="logout.php" class="btn">LOGOUT</a>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<?php include 'footer.php'; ?>

</body>
</html>
