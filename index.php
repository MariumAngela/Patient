<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Hospital</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Main </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="patient.php">Patient Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="doctor.php">Doctor Details</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12">

                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="images\doc1.jpg" width="200px" height="300px" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="images\doc2.jpg" width="200px" height="300px" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="images\doc3.jpg"  width="200px" height="300px" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>
                  </div>
            </div>
        </div>
    <div class="row">
    <div class="col col-12 col-sm-6 col-md-6 ">
    <table class="table">
        <tr>
            <td>Patient Name</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Doctor Name</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Contact No:</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td> </td>
            <td><button class="btn btn-info">SUBMIT</button></td>
        </tr>
    </table>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>