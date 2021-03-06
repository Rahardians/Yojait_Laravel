<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOJAIT</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="{{asset('css')}}style.css">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-1">
        <div class="container-fluid">
          <a href="{{url('/booking')}}">
            <img src="img/asset/logo.png" alt="" width="50" height="50">
        </a>
        </div>
      </nav>
    <section id="form">
    <div class="container text-center">
        <h2></h2>
        <div class="row" style="margin-top: 100px;">
        <div class="container">
        <div class="row">
        <div class="col">
            <img src="img/asset/pemesanan3.png" style="height: 500px;" alt="">
        </div>
        <div class="col">
            <div class="global-container"> 
                <div class="card form-form">
                    <div class="card-body">
                        <h1 class="card-title text-center" style="font-family: monospace;">Form Pemesanan</h1>                       
                    </div>
                    <div class="card-text">
                        <form>
                            <div class="container">                            
                                <div class="row">
                                  <div class="col-md-15 order-md-1">
                                    <form class="needs-validation" novalidate>
                                      <div class="row">
                                        <div class="col-md-6 mb-3">
                                          <label for="firstName">First name</label>
                                          <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                          <div class="invalid-feedback">
                                            Valid first name is required.
                                          </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                          <label for="lastName">Last name</label>
                                          <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                          <div class="invalid-feedback">
                                            Valid last name is required.
                                          </div>
                                        </div>
                                      </div>                            
                                      <div class="mb-3">
                                        <div class="input-group">
                                        </div>
                                      </div>
                                      <div class="mb-3">
                                        <label for="email">Email <span class="text-muted">(Optional)</span></label>
                                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                        <div class="invalid-feedback">
                                          Please enter a valid email address for shipping updates.
                                        </div>
                                      </div>
                                      <div class="mb-3">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" placeholder="" required>
                                        <div class="invalid-feedback">
                                          Please enter your shipping address.
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6 mb-3">
                                          <label for="cc-expiration">Expiration</label>
                                          <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                          <div class="invalid-feedback">
                                            Expiration date required
                                          </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="cc-expiration">Expiration</label>
                                            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                            <div class="invalid-feedback">
                                              Expiration date required
                                            </div>
                                          </div>
                                        <hr class="mb-4">
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="same-address">
                                        <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                                      </div>
                                    </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </form>
                     </div>
                </div>
            </div>
            <div class="buton text-center">
                <div class="mb-2">
                    <a class="btn btn-outline-primary" href="{{url('/wishlist')}}" role="button">Continue</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>

</section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</head>
</html>