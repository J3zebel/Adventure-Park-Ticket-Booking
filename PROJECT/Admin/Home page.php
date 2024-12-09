<?php
ob_start();
include("Head.php");
include("../Assets/Connection/Connection.php");
?>
<div class="d-xl-flex justify-content-between align-items-start">
  <h2 class="text-dark font-weight-bold mb-2"> Overview dashboard </h2>

</div>
<div class="row">
  <div class="col-md-12">
    
        <div class="row">
          <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body text-center">
                <h5 class="mb-2 text-dark font-weight-normal">Users</h5>
                <h2 class="mb-2 text-dark font-weight-bold">
                  <?php
$selU="SELECT count(*) as count from tbl_user";
$result=$conn->query($selU);
$row=$result->fetch_assoc();
echo $row['count'];
                  ?>
                </h2>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body text-center">
                <h5 class="mb-2 text-dark font-weight-normal">Rides</h5>
                <h2 class="mb-2 text-dark font-weight-bold">
                  <?php
                  $selU="SELECT count(*) as count from tbl_rides";
                  $result=$conn->query($selU);
                  $row=$result->fetch_assoc();
                  echo $row['count'];
                  ?>
                  </h2>

              </div>
            </div>
          </div>
          <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body text-center">
                <h5 class="mb-2 text-dark font-weight-normal">Bookings</h5>
                <h2 class="mb-2 text-dark font-weight-bold">
                <?php
                  $selU="SELECT count(*) as count from tbl_booking";
                  $result=$conn->query($selU);
                  $row=$result->fetch_assoc();
                  echo $row['count'];
                  ?>
                </h2>

              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body text-center">
                <h5 class="mb-2 text-dark font-weight-normal">Total Income</h5>
                <h2 class="mb-2 text-dark font-weight-bold">
                <?php
                  $selU="SELECT sum(booking_amount) as sum from tbl_booking";
                  $result=$conn->query($selU);
                  $row=$result->fetch_assoc();
                  echo $row['sum'];
                  ?>
                </h2>

              </div>
            </div>
          </div>
        </div>
        
      
  </div>
</div>
<?php
include("Foot.php");
ob_flush();
?>