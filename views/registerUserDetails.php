<?php
// Start Session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Example: session user check
if (!isset($_SESSION['user'])) {
    header("Location: login");
    exit;
}

$user = $_SESSION['user']; // logged-in user details
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7f9;
        }

        /* Sidebar */
        .sidebar {
            height: 100vh;
            background: #343a40;
            padding: 20px 0;
            position: fixed;
            width: 230px;
        }

        .sidebar a {
            color: #ffffff;
            text-decoration: none;
            padding: 12px 20px;
            display: block;
            font-size: 16px;
        }

        .sidebar a:hover {
            background: #495057;
        }

        /* Main content */
        .main-content {
            margin-left: 240px;
            padding: 20px;
        }

        /* Header */
        .header-bar {
            background: #ffffff;
            padding: 15px 25px;
            border-radius: 8px;
            box-shadow: 0px 1px 5px #ccc;
            margin-bottom: 20px;
        }

        .logo {
            font-size: 20px;
            font-weight: bold;
            color: #007bff;
        }

        .username-box {
            font-weight: bold;
            color: #333;
        }

        table thead {
            background: #007bff;
            color: #fff;
        }

        .table-wrapper {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 1px 5px #ccc;
        }
    </style>
</head>
<body>

    <!-- LEFT SIDEBAR -->
    <div class="sidebar">
        <a href="dashboard">🏠 Dashboard</a>
        <a href="registerUserDetails">📄 Register List</a>
        <a href="<?= BASE_URL . '/logout' ?>">🚪 Logout</a>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">

        <!-- TOP HEADER -->
        <div class="header-bar d-flex justify-content-between align-items-center">
            <div class="logo">My Application</div>
            <div class="username-box">
                Logged in as: <?php echo htmlspecialchars($user['name']); ?>
            </div>
        </div>

        <!-- REGISTER USER TABLE -->
        <div class="table-wrapper">
            <h4 class="mb-3">📋 Registered Users</h4>

            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>School Name</th>
                    <th>Contact No.</th>
                    <th>Class</th>
                    <th>Subject</th>
                    <th>Amount</th>
                    <th>Created At</th>
                </tr>
                </thead>

                <tbody>
                <?php if (!empty($userDetails)): ?>
                    <?php foreach ($userDetails as $u): ?>
                        <tr>
                            <td><?php echo $u['id']; ?></td>
                            <td><?php echo $u['student_name']; ?></td>
                            <td><?php echo $u['school_name']; ?></td>
                            <td><?php echo $u['contact_number']; ?></td>
                            <td><?php echo $u['class']; ?></td>
                            <td><?php echo $u['subject']; ?></td>
                            <td><?php echo $u['amount']; ?></td>
                            <td><?php echo $u['created_at']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8" class="text-center">No Records Found</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>
