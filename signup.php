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
					<li role="presentation" class="active"><a href="index.php">Home</a></li>
					<li role="presentation"><a href="Ranking page.php">Ranking page  </a></li>
					<li role="presentation"><a href="console page.php">Console Overview</a></li>
					<li role="presentation"><a href="signin.php">User Page</a></li>
					<li role="presentation"><a href="#">Contact Us</a></li>
				</ul>
            </nav>
            <h3 class="text-muted">Gaming Review</h3>
        </div>


        <form class="form-horizontal">
            <div class="form-group">
                <label for="inputEmail" class="control-label col-xs-2">Email</label>
                <div class="col-xs-10">
                    <input type="email" class="form-control" id="inputEmail">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword" class="control-label col-xs-2">Password</label>
                <div class="col-xs-10">
                    <input type="password" class="form-control" id="inputPassword">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3" for="confirmPassword">Confirm Password:</label>
                <div class="col-xs-9">
                    <input type="password" class="form-control" id="confirmPassword">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3" for="firstName">First Name:</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="firstName">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3" for="lastName">Last Name:</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="lastName">
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                    <button type="Submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>


        <footer class="footer">
		<p>&copy; Jawdat Shaat 100546 - LJMU</p>
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