
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Example of Bootstrap 3 Button Methods</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.css">
  <!-- <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css"> -->

  <link rel="stylesheet" href="css.css">

  <style type="text/css">
    /* .nav a { 
   outline: none; 
  } 
   
  .bs-example { 
   margin: 20px; 
  }  */
  </style>

</head>

<body>
  <?php
     require("nav.html");
    ?>

  <div class="row">
    <div class="col-md-2"><br><br>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h1 class="panel-title">Titre</h1>
        </div>
        <div class="panel-body">
          <p>Ce site est rediger par les trois personne en developpement web dans une univesté de Harward</p>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="jumbotron">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
              aria-controls="nav-home" aria-selected="true">Home</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-njara" role="tab"
              aria-controls="nav-profile" aria-selected="false">Njaratiana</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-nirina" role="tab"
              aria-controls="nav-contact" aria-selected="false">Nirina</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-toky" role="tab"
              aria-controls="nav-contact" aria-selected="false">Tokihery</a>
          </div>
        </nav>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <strong>cdkv,dfkvdfklv,dklv,dfkvf;vlkdf;vkld,fkl,dklv,fkl,vkl,kl</strong>,</div>
          <div class="tab-pane fade" id="nav-njara" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="jumbotron">
              <div class="row">
                <div class="img col-md-4">
                  <img src="1.png" alt="your image de njara" class="photo" srcset="">
                </div>
                <div class="desc col-md-8">
                  Njaratiana
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-nirina" role="tabpanel" aria-labelledby="nav-contact-tab">
            <div class="jumbotron">
              <div class="row">
                <div class="img col-md-4">
                  <img src="./sary/nirina.JPG" alt="your image de nirina" class="photo" srcset="">
                  nirina
                </div>
                <div class="desc col-md-8">
                  nirina
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-toky" role="tabpanel" aria-labelledby="nav-contact-tab">
            <div class="jumbotron">
              <div class="row">
                <div class="img col-md-4">
                  <img src="info.jpg" alt="your image de Tokihery" class="photo" srcset="">
                </div>
                <div class="desc col-md-8">
                  <table class="table">
                    <tr>
                      <td>RANDRIANAMBININTSOA</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2"></div>
  </div>

  <!-- <script src="./framework/js/jquery.js"></script>
  <script src="./framework/js/bootstrap.js"></script> -->

</body>

</html>