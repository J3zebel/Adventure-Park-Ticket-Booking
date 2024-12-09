<?php
include("../Assets/Connection/Connection.php");
//session_start();
include("Head.php");

$sel = "select user_password from tbl_user where user_id=" . $_SESSION["uid"];
$result = $conn->query($sel);
$data = $result->fetch_assoc();

if (isset($_POST["btn_update"])) {
    $password = $data["user_password"];
    $oldpswd = $_POST["txt_oldpswd"];
    $newpswd = $_POST["txt_newpswd"];
    $conpswd = $_POST["txt_conpswd"];

    if ($password == $oldpswd) {
        if ($newpswd == $conpswd) {
            $update = "update tbl_user set user_password = '$newpswd' where user_id = " . $_SESSION["uid"];
            if ($conn->query($update)) {
                echo "<script>
                        alert('Password changed successfully');
                        window.location='Changepswd.php';
                      </script>";
            }
        } else {
            echo "<script>
                    alert('New passwords do not match');
                    window.location='Changepswd.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Invalid current password');
                window.location='Changepswd.php';
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../Assets/Templates/CSS/profile.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4">
                    <div class="card-header text-center">
                        <h3>Change Password</h3>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <!-- Old Password Field -->
                            <div class="mb-3">
                                <label for="txt_oldpswd" class="form-label"><strong>Old Password:</strong></label>
                                <input type="password" class="form-control" id="txt_oldpswd" name="txt_oldpswd" required autocomplete="off">
                            </div>

                            <!-- New Password Field -->
                            <div class="mb-3">
                                <label for="txt_newpswd" class="form-label"><strong>New Password:</strong></label>
                                <input type="password" class="form-control" id="txt_newpswd" name="txt_newpswd" required 
                                       pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least one number, one uppercase and lowercase letter, and at least 8 characters" autocomplete="off">
                                <div class="form-text">Must contain at least one number, one uppercase and lowercase letter, and at least 8 characters.</div>
                            </div>

                            <!-- Confirm Password Field -->
                            <div class="mb-3">
                                <label for="txt_conpswd" class="form-label"><strong>Confirm Password:</strong></label>
                                <input type="password" class="form-control" id="txt_conpswd" name="txt_conpswd" required autocomplete="off">
                            </div>

                            <!-- Update Button -->
                            <div class="text-center">
                                <button type="submit" name="btn_update" class="btn btn-success">
                                    Update Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
include("Foot.php");
?>
