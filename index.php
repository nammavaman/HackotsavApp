<?php
include('script/getresources.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>CADMUS</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div class="bgimg">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand font-weight-bold mx-auto" href="#">CADMUS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsiblenavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="collapsiblenavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="navbar-item">
                        <a class="nav-link text-white" href="#">ABOUT</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link text-white" href="#">PROJECT</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link text-white" href="#">RESOURCE</a>
                    </li>
                    
                </ul>
            </div>
        </nav>
    <div class="container-fluid">
      <hr>
      <!-- Projects-->
      <section id="project">
          <div>
              <span>
                  <h2 class="text-white">Projects</h2>
              </span>
              <!-- <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">New Project</button> -->
              <!-- <div class="collapse" id="collapseExample"> -->
                  <div class="card text-white bg-dark card-body">
                      <form name="Database" action="script/addnewproject.php" method="post">
                          
                          <div class="mb-3">
                              <label for="vehicle" class="form-label">Vehicle Required</label>
                              <input type="number" class="form-control" id="vehicle" placeholder="Vehicle Required" name="Vehicles">
                              <span id="passwordHelpInline" class="form-text">
                                  <?php echo $Vehicles?> Available.
                              </span>
                          </div>
                          <div class="mb-3">
                              <label for="tool" class="form-label">Tools Required</label>
                              <input type="number" class="form-control" id="tool" placeholder="Tools Required" name="Tools">
                              <span id="passwordHelpInline" class="form-text">
                                  <?php echo $Tools?> Available.
                              </span>
                          </div>
                          <div class="mb-3">
                              <label for="mpower" class="form-label">Man Power</label>
                              <input type="number" class="form-control" id="mpower" placeholder="Man Power" name="Manpower">
                              <span id="passwordHelpInline" class="form-text">
                                  <?php echo $Manpower?> Available.
                              </span>
                          </div>
                          <div class="mb-3">
                              <label for="buget" class="form-label">Estimated Budget</label>
                              <input type="number" class="form-control" id="buget" placeholder="Estimated Budget" name="Budget">
                              <span id="passwordHelpInline" class="form-text">
                                  <?php echo $Budget?>  Available.
                              </span>
                          </div>
                          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                      </form>
                  </div>
              <!-- </div> -->


          </div>
  </div>
  </section>
  <hr>
  <!-- Resorces-->
  <section id="resource">
      <div>
          <h2 class="text-white">Resources</h2>
          <table class="table table-dark table-striped table-hover">
              <tr>
                  <th>Resource Title</th>
                  <th>Resources Available</th>
              </tr>
              <tr>
                  <th>Manpower</th>
                  <td><?php echo $Manpower?></td>
              </tr>
              <tr>
                  <th>Tools</th>
                  <td><?php echo $Tools?></td>
              </tr>
              <tr>
                  <th>Budget</th>
                  <td><?php echo $Budget?></td>
              </tr>
              <tr>
                  <th>Vehicles</th>
                  <td><?php echo $Vehicles?></td>
              </tr>
          </table>

      </div>
  </section>
  <hr>
  </div>
<!-- 
    <section class="section-2 container-fluid p-0">
        <div class="cover">
          <div class="overlay"></div>
          <div class="content text-center">
            <h1>Some Features That Made Us Unique</h1>
          </div>
        </div>
        <div class="container-fluid text-center">
          <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
            <div class="rect">
              <h1>1253</h1>
              <p>Happy Client</p>
            </div>
            <div class="rect">
              <h1>6784</h1>
              <p>USERS </p>
            </div>
            <div class="rect">
              <h1>9152</h1>
              <p>Total Projects</p>
            </div>
          </div>
        </div>

        <section class="section-3 container-fluid p-0 text-center">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <h1>Download Our App for all Platform</h1>
                <p>
                  CADMUS.INC  
                  
                </p>
              </div>
            </div>
            <div class="platform row">
              <div class="col-md-6 col-sm-12 text-right">
                <div class="desktop shadow-lg">
                  <div class="d-flex flex-row justify-content-center">
                    <i class="fas fa-desktop fa-3x py-2 pr-3"></i>
                    <div class="text text-left">
                      <h3 class="pt-1 m-0">Desktop</h3>
                      <p class="p-0 m-0">On website</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 text-left">
                <div class="desktop shadow-lg">
                  <div class="d-flex flex-row justify-content-center">
                    <i class="fas fa-mobile-alt fa-3x py-2 pr-3"></i>
                    <div class="text text-left">
                      <h3 class="pt-1 m-0">On Mobile</h3>
                      <p class="p-0 m-0">On Play Store</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
       -->







    

</body>
</html>