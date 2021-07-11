<?php
include('script/getresources.php');
include('script/getprojectdetails.php')
?>

<!DOCTYPE html>
<html>

<head>
    <title>CADMUS</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body class="bgimg">
    <div>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand font-weight-bold mx-auto" href="/">CADMUS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsiblenavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="collapsiblenavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="navbar-item">
                        <a class="nav-link text-white" href="#scrollspyHeading1">PROJECT</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link text-white" href="#scrollspyHeading2">ADD NEW PROJECT</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link text-white" href="#scrollspyHeading3">RESOURCE</a>

                    </li>
                    
                </ul>
            </div>
        </nav>
    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
    <div class="container-fluid">
      <hr>
      <!-- Projects-->
      <section><a id="project"></a>
          <div>
              <span>
                  <h2 class="text-white" id="scrollspyHeading1">Projects</h2>
                  <h2 class="text-white p-3">Projects</h2>
              </span>
              <?php foreach ($array as $prjs) {?>
                <div class="card text-white bg-dark mx-3">
                  <div class="card-title">
                    <h2 class="ml-3">
                      Project Id : <?php echo $prjs['Project_ID'] ?>
                    </h2>
                   
                  </div>
                  <div class="card-body">
                    <table class="table table-dark table-striped table-hover">
                    <tr>
                        <th>Resource Title</th>
                        <th>Resources Alloted</th>
                    </tr>
                    <tr>
                        <th>Manpower</th>
                        <td><?php echo $prjs['Manpower']?></td>
                    </tr>
                    <tr>
                        <th>Tools</th>
                        <td><?php echo $prjs['Tools']?></td>
                    </tr>
                    <tr>
                        <th>Budget</th>
                        <td><?php echo $prjs['Budget']?></td>
                    </tr>
                    <tr>
                        <th>Vehicles</th>
                        <td><?php echo $prjs['Vehicles']?></td>
                    </tr>
                    </table>
                  </div>
                </div>
                <br>
              <?php } ?>
              <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" id="scrollspyHeading2">New Project</button>
              <div class="collapse" id="collapseExample">
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
              </div>


          </div>
  </div>
  </section>
  <hr>
  <!-- Resorces-->
  <section id="resource" class="mx-4">
      <form action="script/editresources.php" method="post">
      <div>
          <h2 class="text-white" id="scrollspyHeading3">Resources</h2>
          <table class="table table-dark table-striped table-hover">
              <tr>
                  <th>Resource Title</th>
                  <th>Resources Available</th>
              </tr>
              <tr>
                  <th>Manpower</th>
                  <td><input type="number" class="form-control" id="mpower" placeholder="<?php echo $Manpower?>" name="Manpower"></td>
              </tr>
              <tr>
                  <th>Tools</th>
                  <td><input type="number" class="form-control" id="buget" placeholder="<?php echo $Tools?>" name="Tools"></td>
              </tr>
              <tr>
                  <th>Budget</th>
                  <td><input type="number" class="form-control" id="buget" placeholder="<?php echo $Budget?>" name="Budget"></td>
              </tr>
              <tr>
                  <th>Vehicles</th>
                  <td><input type="number" class="form-control" id="vehicle" placeholder="<?php echo $Vehicles?>" name="Vehicles"></td>
              </tr>
              <tr>
                  <td></td>
                  <td><button type="submit" class="btn btn-primary" name="submit">Submit</button><td>
              </tr>
          </table>

      </div>
      </form>
      
  </section>
    </div>
  <hr>
  </div>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 

</body>
</html>
