
  <!-- ======= Header ======= -->
<?php include 'include/header.php'; ?>
  <!-- ======= Header ======= -->

    <link rel="stylesheet" href="./static/css/grid.css">
    <link rel="stylesheet" href="./static/css/app.css">
  

  <main id="main">

  
    <!-- main content -->
    <div class="content">
        <div class="container" style="max-width: 1600px; margin: auto;">
            <!-- country select -->
            <div class="row" style="margin-top: 2%;">
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box">
                        <div class="country-select" id="country-select">
                            <div class="country-select-toggle" id="country-select-toggle">
                                <span>
                                    Global
                                </span>
                                <i class="bx bx-chevron-down"></i>
                            </div>
                            <div class="country-select-list" id="country-select-list">
                                <input type="text" placeholder="Search country name">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end country select -->

            <!-- tracking information -->
            <div class="row">
                <!-- left content -->
                <div class="col-8 col-md-12 col-sm-12">
                    <div class="row">
                        <!-- counter -->
                        <div class="col-4 col-md-4 col-sm-12">
                            <div class="box box-hover">
                                <div class="count count-confirmed">
                                    <div class="count-icon">
                                        <i class="bx bxs-virus"></i>
                                    </div>
                                    <div class="count-info">
                                        <h5 id="confirmed-total">123,456,789</h5>
                                        <span>confirmed</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- counter -->
                        <!-- counter -->
                        <div class="col-4 col-md-4 col-sm-12">
                            <div class="box box-hover">
                                <div class="count count-recovered">
                                    <div class="count-icon">
                                        <i class="bx bxs-smile"></i>
                                    </div>
                                    <div class="count-info">
                                        <h5 id="recovered-total">123,456,789</h5>
                                        <span>recovered</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- counter -->
                        <!-- counter -->
                        <div class="col-4 col-md-4 col-sm-12">
                            <div class="box box-hover">
                                <div class="count count-death">
                                    <div class="count-icon">
                                        <i class="bx bxs-sad"></i>
                                    </div>
                                    <div class="count-info">
                                        <h5 id="death-total">123,456,789</h5>
                                        <span>deaths</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- counter -->

                        <!-- all time chart -->
                        <div class="col-12">
                            <div class="box">
                                <div class="box-header">
                                    all times
                                </div>
                                <div class="box-body">
                                    <div id="all-time-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end all time chart -->

                        <!-- embed video -->
<!--                         <div class="col-6 col-md-6 col-sm-12">
                            <div class="box">
                                <div class="box-header">
                                    what is covid-19
                                </div>
                                <div class="box-body">
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/OZcRD9fV7jo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-6 col-sm-12">
                            <div class="box">
                                <div class="box-header">
                                    how to protect yourself
                                </div>
                                <div class="box-body">
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/1APwq1df6Mw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div> -->
                        <!-- end embed video -->
                    </div>
                </div>
                <!-- end left content -->

                <!-- right content -->
                <div class="col-4 col-md-12 col-sm-12">
                    <!-- 30 days chart -->
                    <div class="box">
                        <div class="box-header">
                            last 30 days
                        </div>
                        <div class="box-body">
                            <div id="days-chart"></div>
                        </div>
                    </div>
                    <!-- end 30 days chart -->

                    <!-- recovery rate chart -->
                    <div class="box">
                        <div class="box-header">
                            recovery rate
                        </div>
                        <div class="box-body">
                            <div id="recover-rate-chart"></div>
                        </div>
                    </div>
                    <!-- end recovery rate chart -->
                </div>
                                   <!-- top country affected -->
                    <div class="box">
                        <div class="box-header">
                            top countries affected
                        </div>
                        <div class="box-body">
                            <table class="table-countries" id="table-countries">
                                <thead>
                                    <tr>
                                        <th style="text-align-last: center;">
                                            Country
                                        </th>
                                        <th style="text-align-last: center;">Confirmed</th>
                                        <th style="text-align-last: center;">Recovered</th>
                                        <th style="text-align-last: center;">Deaths</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>test</td>
                                        <td>test</td>
                                        <td>test</td>
                                        <td>test</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end top country affected -->
                <!-- end right content -->
            </div>
            <!-- end tracking information -->
        </div>
    </div>
    <!-- end main content -->

  </main><!-- End #main -->

          <!-- loader -->
<!--     <div class="loader">
        <i class="bx bxs-virus bx-spin"></i>
    </div> -->
    <!-- end loader -->

      <!-- apexchart -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- JS -->
    <script src="./static/js/fetchApi.js"></script>
    <script src="./static/js/covidApi.js"></script>
    <script src="./static/js/app.js"></script>

  <!-- ======= Footer ======= -->
<?php include 'include/footer.php'; ?>
  <!-- ======= Footer ======= -->