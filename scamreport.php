<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="./assets/img/kit/free/apple-icon.png">
    <link rel="icon" href="./assets/img/kit/free/favicon.png">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="./assets/css/material-kit.css?v=2.0.2">
    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/assets-for-demo/demo.css" rel="stylesheet"/>
    <!-- iframe removal -->
</head>

<html>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Fusion Community</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">Social
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./market.php">Market</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./scamreport.php">Report Scam
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container card">



    <div class="row">
        <div class="col-md-12">
            <h3>Scam Reports</h3>
            <p>FSN is growing bigger and bigger by the day and it is backed by a beautiful community.
                <br>
                Unfortunately not all people have good intensions, please be aware of scams.
            You can view reported scammers, or report one by yourself.
                <br>
                Let's build a stronger community all together.
            </p>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="btn btn-outline-success" id="view-tab" data-toggle="tab" href="#view" role="tab" aria-controls="view" aria-selected="false">View Reports</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-danger" id="report-tab" data-toggle="tab" href="#report" role="tab" aria-controls="report" aria-selected="false">Report a scam</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade" id="view" role="tabpanel" aria-labelledby="view-tab">

                </div>
                <div class="tab-pane fade" id="report" role="tabpanel" aria-labelledby="report-tab">
                    <div class="col-md-6">
                        <form>
                            <div class="form-group">
                                <label for="exampleInput1" class="bmd-label-floating">Your Name</label>
                                <input type="text" class="form-control" id="exampleInput1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInput1" class="bmd-label-floating">Scammer's Username</label>
                                <input type="text" class="form-control" id="exampleInput1">
                            </div>

                            <div class="form-group">
                                <label>Accused of:</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    Hacking
                                    <span class="form-check-sign">
        <span class="check"></span>
    </span>
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    Scamming
                                    <span class="form-check-sign">
        <span class="check"></span>
    </span>
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    Phishing
                                    <span class="form-check-sign">
        <span class="check"></span>
    </span>
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    Admin Imposter
                                    <span class="form-check-sign">
        <span class="check"></span>
    </span>
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    Fusion Imposter
                                    <span class="form-check-sign">
                              <span class="check"></span>
                                 </span>
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="exampleInput1" class="bmd-label-floating">Additional Information</label>
                                <textarea type="email" class="form-control" id="exampleInput1"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Active on the following platforms:</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    Twitter
                                    <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"> Reddit
                                    <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    Telegram
                                    <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    Website
                                    <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                                </label>
                            </div>
                            <hr>
                            <a class="btn btn-outline-danger" href="#">Report</a>
                    </div>

                </div>
            </div>
            <hr>

        </div>
    </div>
    <hr>

</div>

<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
    </div>
</footer>

</body>

<!--   Core JS Files   -->
<script src="./assets/js/core/jquery.min.js"></script>
<script src="./assets/js/core/popper.min.js"></script>
<script src="./assets/js/bootstrap-material-design.js"></script>
<script src="./assets/js/material-kit.js?v=2.0.2"></script>

</html>

