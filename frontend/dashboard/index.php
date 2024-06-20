<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="#users">Users</a></li>
            <li><a href="#champions">Champions</a></li>
            <li><a href="#traits">Traits</a></li>
            <!-- <li><a href="#team-planner">Team Planner</a></li> -->
        </ul>
        <div class="logout-container">
            <button class="logout-button">Logout</button>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h1>Welcome, Admin</h1>
        </header>
        <section id="overview">
            <div class="card">
                <h3>Total Users</h3>
                <?php
                    include '../../backend/main.php';
                    // $conn = connect();
                    $data = mysqli_query($conn, "select * from users");
                    $total_users = mysqli_num_rows($data);
                    ?>
                <p><?php echo $total_users; ?></p>
            </div>
            <div class="card">
                <h3>Total Champions</h3>
                <?php
                    $data = mysqli_query($conn, "select * from champions");
                    $total_champions = mysqli_num_rows($data);
                    ?>
                <p><?php echo $total_champions; ?></p>
            </div>
            <div class="card">
                <h3>Total Traits</h3>
                <?php
                    $data = mysqli_query($conn, "select * from traits");
                    $total_traits = mysqli_num_rows($data);
                    ?>
                <p><?php echo $total_traits; ?></p>
            </div>
        </section>
    </div>
</body>
</html>
