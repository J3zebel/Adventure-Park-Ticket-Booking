<?php
include("../Assets/Connection/Connection.php");
//session_start();
include("Head.php");

$sel = "select * from tbl_user where user_id=" . $_SESSION["uid"];
$result = $conn->query($sel);
$data = $result->fetch_assoc();

if (isset($_POST["btn_update"])) {
    $name = $_POST["txt_name"];
    $contact = $_POST["txt_contact"];
    $email = $_POST["txt_email"];
    
    $update = "UPDATE tbl_user 
                SET user_name = '$name', user_contact = '$contact', user_email = '$email' 
                WHERE user_id = " . $_SESSION["uid"];
    
    if ($conn->query($update)) {
        echo "<script>
                alert('Profile updated successfully!');
                window.location='Editprofile.php';
              </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Assets/Templates/CSS/profile.css"> 
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-4">
                    <div class="card-header text-center">
                        <h3>Edit Profile</h3>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <!-- Name Field -->
                            <div class="mb-3 row">
                                <label for="txt_name" class="col-md-3 col-form-label"><strong>Name:</strong></label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="txt_name" name="txt_name" 
                                           required  pattern="^[A-Z]+[a-zA-Z ]*$" value="<?php echo $data['user_name']; ?>" autocomplete="off">
                                </div>
                            </div>

                            <!-- Contact Field -->
                            <div class="mb-3 row">
                                <label for="txt_contact" class="col-md-3 col-form-label"><strong>Contact:</strong></label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="txt_contact" name="txt_contact" 
                                           required  pattern="[7-9]{1}[0-9]{9}" value="<?php echo $data['user_contact']; ?>" autocomplete="off">
                                </div>
                            </div>

                            <!-- Email Field -->
                            <div class="mb-3 row">
                                <label for="txt_email" class="col-md-3 col-form-label"><strong>Email:</strong></label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" id="txt_email" name="txt_email" 
                                           required value="<?php echo $data['user_email']; ?>" autocomplete="off">
                                </div>
                            </div>

                            <!-- Update Button -->
                            <div class="text-center">
                                <button type="submit" name="btn_update" class="btn btn-success">
                                    Update Profile
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
