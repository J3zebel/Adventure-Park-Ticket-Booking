<?php
include("../Assets/Connection/Connection.php");
include("Head.php");

if (isset($_POST["btn_submit"])) {
    $reply = $_POST["txt_reply"];
    
    $update = "UPDATE tbl_complaint SET com_reply = '".$reply."', com_status = 1 WHERE com_id = ".$_GET["cid"];
    if ($conn->query($update)) {
?>
        <script>
            alert("Reply submitted successfully!");
            window.location = "Reply.php"; // Ensure this is the correct redirect URL
        </script>
<?php
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reply</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Reply to Complaint</h2>
        <form id="form1" name="form1" method="post" action="">
            <div class="mb-3">
                <label for="txt_reply" class="form-label">Reply</label>
                <textarea name="txt_reply" id="txt_reply" class="form-control" rows="5" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" name="btn_submit" id="btn_submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
include("Foot.php");
?>
