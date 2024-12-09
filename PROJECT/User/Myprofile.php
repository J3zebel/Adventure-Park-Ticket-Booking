<?php
include("../Assets/Connection/Connection.php");
//session_start();
include("Head.php");

$selqry = "SELECT * FROM tbl_user u 
            INNER JOIN tbl_place p ON u.place_id = p.place_id 
            INNER JOIN tbl_district d ON p.district_id = d.district_id 
            WHERE user_id = " . $_SESSION["uid"];
$result = $conn->query($selqry);
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Assets/Templates/CSS/profile.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card p-4">
                    <div class="card-header text-center">
                        <h3>My Profile</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Left Column: Profile Picture -->
                            <div class="col-md-6 text-center">
                                <img src="../Assets/Files/User/<?php echo $data["user_photo"] ?>" alt="Profile Photo" class="profile-img img-fluid mb-3">
                            </div>

                            <!-- Right Column: User Details -->
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <div class="col-md-4"><strong>Name:</strong></div>
                                    <div class="col-md-8"><?php echo $data["user_name"]; ?></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4"><strong>Contact:</strong></div>
                                    <div class="col-md-8"><?php echo $data["user_contact"]; ?></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4"><strong>Email:</strong></div>
                                    <div class="col-md-8"><?php echo $data["user_email"]; ?></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4"><strong>District:</strong></div>
                                    <div class="col-md-8"><?php echo $data["district_name"]; ?></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4"><strong>Place:</strong></div>
                                    <div class="col-md-8"><?php echo $data["place_name"]; ?></div>
                                </div>
                                <div class="row mt-4 text-center">
                                    <div class="col">
                                        <a href="Editprofile.php" class="btn btn-warning">Edit Profile</a>
                                        <a href="Changepswd.php" class="btn btn-info">Change Password</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End of row -->
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