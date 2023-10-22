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
    include 'logic.php';
?>

  <main id="main">
    <div class="container-fluid bg-light text-center" style="padding: 1%; margin-top: 14%;">
        <h1 class="">Covid-19 Tracker</h1>
        <h5 class="text-info">"Prevention is the Cure."</h5>
        <p class="text-muted">Stay Indoors Stay Safe.</p>
    </div>

    <div class="container my-5">
        <div class="row text-center">
            <div class="col-4 text-warning">
                <h5>Confirmed</h5>
                <?php echo $total_confirmed;?>
            </div>
            <div class="col-4 text-success">
                <h5>Recovered</h5>
                <?php echo $total_recovered;?>
            </div>
            <div class="col-4 text-danger">
                <h5>Deceased</h5>
                <?php echo $total_deaths;?>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-bordered" id="myTable">

                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Countries</th>
                        <th scope="col">Confirmed</th>
                        <th scope="col">Recovered</th>
                        <th scope="col">Deceased</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($data as $key => $value){
                            $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'];
                    ?>
                        <tr>
                            <th scope="row"><?php echo $key?></th>
                            <td>
                                <?php echo $value[$days_count]['confirmed'];?>
                                <?php if($increase != 0){ ?>
                                    <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?></small>  
                                <?php } ?>    
                            </td>
                            <td><?php echo $value[$days_count]['recovered'];?></td>
                            <td><?php echo $value[$days_count]['deaths'];?></td>
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
