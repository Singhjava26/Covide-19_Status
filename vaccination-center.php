  <!-- ======= Header ======= -->
<?php include 'include/header.php'; ?>
  <!-- ======= Header ======= -->

      <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./dataset_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <!-- Bootstrap JS -->
    <script src="./dataset_assets/js/jquery-3.4.1.slim.min.js"></script>
    <script src="./dataset_assets/js/popper.min.js"></script>
    <script src="./dataset_assets/js/bootstrap.min.js"></script>
    <script src="./dataset_assets/js/jquery.dataTables.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/996973c893.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- My Stylesheet -->
    <link rel="stylesheet" href="./dataset_assetscss/style.css">


<?php

    error_reporting(0);
    $jsonData = file_get_contents("http://localhost/covid/Medicio/hospitalApi.php");
    $data = json_decode($jsonData, true);

?>
  

  <main id="main">
    <div class="container-fluid bg-light text-center" style="padding: 1%; margin-top: 14%;">
        <h1 class="">Covid-19 Vaccination Center</h1>
        <h5 class="text-info">"Prevention is the Cure."</h5>
        <p class="text-muted">Stay Indoors Stay Safe.</p>
    </div>

    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-bordered" id="myTable">
                <thead class="thead-dark">
                    <tr style="text-transform: capitalize;">
                        <th scope="col">id</th>
                        <th scope="col">state</th>
                        <th scope="col">city</th>
                        <th scope="col">hospital id</th>
                        <th scope="col">hospital name</th>
                        <th scope="col">address</th>
                        <th scope="col">pin code</th>
                        <th scope="col">phone no</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($data as $key => $value){
                        //     $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'];
                    ?>
                        <tr>
                            <th scope="row"><?php echo $value['id'];?></th>
                            <td> <?php echo $value['state'];?></td>
                            <td> <?php echo $value['city'];?></td>
                            <td> <?php echo $value['hospital_id'];?></td>
                            <td> <?php echo $value['hospital_name'];?></td>
                            <td> <?php echo $value['address'];?></td>
                            <td> <?php echo $value['pin_code'];?></td>
                            <td> <?php echo $value['phone_no'];?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    
  </main><!-- End #main -->
<br>

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable( {
                responsive: true
            } );
        } );
    </script>


  <!-- ======= Footer ======= -->
<?php include 'include/footer.php'; ?>
  <!-- ======= Footer ======= -->