<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <link rel="apple-touch-icon" href="./assets/img/kit/free/apple-icon.png">
    <link rel="icon" href="./assets/img/kit/free/favicon.png">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="./assets/css/material-kit.css?v=2.0.2">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css"
          integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
</head>

<html>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <img class="navbar-brand" href="#" src="assets/img/logo.png"/>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./index.php">Social
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./market.php">Market</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./scamreport.php">Report Scam</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <h3>Latest News</h3>
    <hr>
    <div class="row">
        <div class="col">
            <div class="title" style="font-size:2em; color:tomato;"><i class="fab fa-reddit"></i> Reddit</div>
            <hr>
            <div id="reddit-posts">
            </div>
        </div>
        <div class="col">
            <div class="title" style="font-size:2em; color:deepskyblue;"><i class="fab fa-twitter"></i> Twitter</div>
            <hr>
            <div id="twitter-posts">
            </div>
        </div>
        <div class="col">
            <div class="title" style="font-size:2em; color:gray;"><i class="fab fa-medium"></i> Medium</div>
            <hr>
            <div id="medium-posts">
            </div>
        </div>
    </div>
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


<script>

    $(document).ready(function () {

        var defaultImage = 'https://cdn-images-1.medium.com/max/1024/1*DUbyhAPHGSIWiJ3jowF5kg.jpeg';

        // Collect and Append Reddit Posts
        $.ajax({
            type: 'GET',
            url: 'https://www.reddit.com/r/FusionFoundation.json',
            dataType: 'json',
            success: function (data) {
                for (var x = 0; x < 10; x++) {
                    var title = data['data']['children'][x]['data']['title'];
                    var author = '/u/' + data['data']['children'][x]['data']['author'];
                    var ups = data['data']['children'][x]['data']['ups'];
                    var downs = data['data']['children'][x]['data']['downs'];
                    var url = data['data']['children'][x]['data']['url'];
                    var timestamp = data['data']['children'][x]['data']['created_utc'];
                    var content = data['data']['children'][x]['data']['selftext'];

                    var dt=eval(timestamp*1000);
                    var date = new Date(dt).toLocaleString();

                    try {
                        var image = data['data']['children'][x]['data']['preview']['images'][0]['source']['url'];
                    } catch (err) {
                        image = defaultImage;
                    }

                    var postContent =
                        '<div class="card">' +
                        '<img class="card-img-top" src="' + image + '" alt=""/>' +
                        '<div class="card-body">' +
                        '<div class="card-title"><a href="' + url + '">' + title + '</a></div><hr>' +
                        '<p class="card-text p-limit">' + content + '</p></div>' +
                        '<div class="card-text text-center">' +
                        '<a href="' + url + '" class="btn btn-outline-danger">View on Reddit</a>' +
                        '</div><hr>' +
                        '<div class="card-footer text-muted">' +
                        '<div class="footer-item"><i class="fas fa-user"></i><a href="https://www.reddit.com' + author + '">' + author + '</a></div>' +
                        '<div class="footer-item"><i class="fas fa-calendar"></i>' + date + '</div>' +
                        '</div>' +

                        '</div><hr>';

                    $("#reddit-posts").append(postContent);

                }
            }
        });

        // Collect and Append Medium Posts
        $.ajax({
            type: 'GET',
            url: 'https://api.rss2json.com/v1/api.json?rss_url=https%3A%2F%2Fmedium.com%2Ffeed%2F%40FusionProtocol',
            dataType: 'json',
            success: function (data) {
                for (var x = 0; x < 11; x++) {
                    var author = data['items'][x]['author'];
                    var link = data['items'][x]['link'];
                    var title = data['items'][x]['title'];
                    var content = data['items'][x]['content'];
                    var date = data['items'][x]['pubDate'];
                    var image = data['items'][x]['thumbnail'];

                    if ( image.indexOf( 'full_rss' ) != -1 ) {
                        image = defaultImage;
                    }

                    var postContent =
                        '<div class="card">' +
                        '<img class="card-img-top" src="' + image + '"/>' +
                        '<div class="card-body">' +
                        '<div class="card-title"><a href="' + link + '">' + title + '</a></div><hr>' +
                        '<p class="card-text p-limit">' + $(content).text() + '</p></div>' +
                        '<div class="card-text text-center">' +
                        '<a href="' + link + '" class="btn btn-outline-success">Read article on Medium</a>' +
                        '</div><hr>' +
                        '<div class="card-footer text-muted">' +
                        '<div class="footer-item"><i class="fas fa-user"></i><a href="https://medium.com/@fusionprotocol">' + author + '</a></div>' +
                        '<div class="footer-item"><i class="fas fa-calendar"></i>' + date + '</div>' +
                        '</div>';

                    $("#medium-posts").append(postContent);

                }
            }
        });


        // Collect and Append Tweets
        $.ajax({
            type: 'GET',
            url: 'https://api.rss2json.com/v1/api.json?rss_url=https%3A%2F%2Ftwitrss.me%2Ftwitter_user_to_rss%2F%3Fuser%3DFusionProtocol',
            dataType: 'json',
            success: function (data) {
                for (var x = 0; x < 10; x++) {

                    var author = data['items'][x]['author'];
                    var link = data['items'][x]['link'];
                    var title = data['items'][x]['title'];
                    var content = data['items'][x]['content'];
                    var date = data['items'][x]['pubDate'];
                    var image = data['items'][x]['thumbnail'];

                    if ( image.indexOf( 'full_rss' ) != -1 ) {
                        image = defaultImage;
                    }

                    var postContent =
                        '<div class="card">' +
                        '<img class="card-img-top" src="' + image + '"/>' +
                        '<div class="card-body">' +
                        '<div class="card-title p-limit"><a href="' + link + '">' + title + '</div><hr>' +
                        '<p class="card-text p-limit">' + $(content).text() + '</p></div>' +
                        '<div class="card-text text-center">' +
                        '<a href="' + link + '" class="btn btn-outline-info">View Tweet</a>' +
                        '</div><hr>' +
                        '<div class="card-footer text-muted">' +
                        '<div class="footer-item"><i class="fas fa-user"></i><a href="https://twitter.com/FUSIONProtocol/">@FusionProtocol</a></div>' +
                        '<div class="footer-item"><i class="fas fa-calendar"></i>' + date + '</div>' +
                        '</div>';

                    $("#twitter-posts").append(postContent);

                }
            }
        });
    })


</script>
<style>
    .fas {
        margin-left: 0.2em;
        margin-right: 0.2em;
    }

    a .btn {
        vertical-align: middle;
    }

    .title {
        font-weight: 500;
    }
    .footer-item{
       padding-right:1em;
    }

    .card-body .p-limit {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 7;
        line-height: X;
        max-height: X*N;
    }

    .row {
        flex-wrap: nowrap;
    }

    .navbar .navbar-brand{
        padding:0px;
    }

    .card .card-footer {
        display: block;;
    }

</style>
</html>