<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Playstation</title>
    <!-- Include Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/layout1.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="header clearfix">
            <nav>
                <ul class="nav nav-pills pull-right">
                    <li role="presentation"><a href="index.php">Home</a></li>
                    <li role="presentation"><a href="console.php">Console</a></li>
                    <li role="presentation"><a href="ranking.php">Ranking</a></li>
                    <li role="presentation"><a href="signin.php">Sign in</a></li>
                </ul>
            </nav>
            <h3 class="text-muted">Playstation</h3>
        </div>

        <form class="form-horizontal">
            <fieldset>
                <h3>Rating</h3>

                <div class="form-group">
                    <label for="textArea" class="col-lg-2 control-label">Textarea</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" rows="3" id="textArea"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </fieldset>
        </form>


        <footer class="footer">
            <p>Jabr Elsafadi SNo:101013</p>
        </footer>

    </div>
    <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.2.4.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <!-- Include Holder Generator JS -->
    <script src="js/holder.js"></script>
</body>

</html>