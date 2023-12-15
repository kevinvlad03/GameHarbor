<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GameHarbor</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>

  <link href="css/index.css" rel="stylesheet">
  <link href="css/navbar.css" rel="stylesheet">
  <link href="css/searchbar.css" rel="stylesheet">
  <link href="css/carousel.css" rel="stylesheet">
  <?php include_once "Components/navbar.php" ?>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap');
  </style>

  <script src="https://kit.fontawesome.com/f5b71e78d1.js" crossorigin="anonymous"></script>

</head>

<body>
  <div class="backsearch">
  </div>

  <!-- search bar -->
  <div class="search-bar">
    <div class="box">
      <form action="" method="post">
        <input type="text" name="" placeholder="Navigate the Game Seas: Search for Your Favorite Titles">
        <i class="fa-solid fa-gamepad fa-beat" style="color:#00387C"></i>
      </form>
    </div>
  </div>

  <section class="pt-3 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="welcome-msg">
            <h3>
              <?php echo "Ahoy, " ?>
              <?php
              session_start();
              if (isset($_SESSION["username"])) {
                echo $_SESSION["username"];
              } else {
                echo "Sailor";
              }
              ?>
              <?php echo "!" ?>
            </h3>
            <h3></h3>
          </div>
        </div>
        <div class="col-5 text-right">
          <a class="btn btn-light mb-3 mr-1" style="color:#00387C" href="#carouselExampleIndicators2" role="button"
            data-slide="prev">
            <i class="fa fa-arrow-left bnt-dark"></i>
          </a>
          <a class="btn btn-light mb-3 mr-1" style="color:#00387C" href="#carouselExampleIndicators2" role="button"
            data-slide="next">
            <i class="fa fa-arrow-right"></i>
          </a>
        </div>
        <div class="col-12">
          <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">

                  <div class="col-md-4 mb-4">
                    <div class="card">
                      <img class="img-fluid" alt="100%x280"
                        src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                      <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                      </div>

                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="card">
                      <img class="img-fluid" alt="100%x280"
                        src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                      <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="card">
                      <img class="img-fluid" alt="100%x280"
                        src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                      <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="carousel-item">
                <div class="row">

                  <div class="col-md-4 mb-3">
                    <div class="card">
                      <img class="img-fluid" alt="100%x280"
                        src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                      <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                      </div>

                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="card">
                      <img class="img-fluid" alt="100%x280"
                        src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
                      <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="card">
                      <img class="img-fluid" alt="100%x280"
                        src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
                      <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="carousel-item">
                <div class="row">

                  <div class="col-md-4 mb-3">
                    <div class="card">
                      <img class="img-fluid" alt="100%x280"
                        src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                      <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                      </div>

                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="card">
                      <img class="img-fluid" alt="100%x280"
                        src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                      <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="card">
                      <img class="img-fluid" alt="100%x280"
                        src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                      <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script type='text/javascript' src=''></script>
  <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
  <script type='text/javascript'
    src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>


</body>

</html>