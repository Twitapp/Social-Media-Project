<!DOCTYPE html>
<html>
	<head>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <title>Profile</title>

    <style>

        nav {
          background-color:#ff0000;
          height:80px;
          position:fixed;
          margin-bottom:5px;
          z-index:100;
        }s

        #logo {
          width:80px;
          height:80px;
          margin-right:25px;
          margin-top:10px;
        }

        .body {
          margin:auto;
          width:70%;
        }

        #about {
          margin-top:75px;
        }

    </style>
	</head>
	<body style="background-color:#fcfcfc">

        <nav>
          <div class="nav-wrapper">
            <a href="edit.php" class="brand-logo center" style="margin-top:-6px"><h3>Twitter</h3></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="about.php">About</a></li>
                <li><a href="help.php">Help</a></li>
            </ul>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="edit.php">My Account</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
          </div>
        </nav>
    	
    <br>

     <div id="about" class="body" class="row">
      <div class="col s12 m6">
          <div class="card white">
            <div class="card-content black-text">
              <span class="card-title"><strong>About:</strong></span>
              <p>This website allows you to post your thoughts, use hastags, and search for posts through username, key words, or hashtags.</p>
            </div>
          </div>
        </div>
      </div>

    <div class="body" class="row">
      <div class="col s12 m6">
          <div class="card white">
            <div class="card-content black-text">
              <span class="card-title"><strong>Our Goal:</strong></span>
              <p>We want to make an easy to use, effective, and enjoyable social media webpage that allows our users to communication and express their ideas. Quality, and appearance are the most important to us, so pleace leave feedback via our contact information.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="body" class="row">
      <div class="col s12 m6">
          <div class="card white">
            <div class="card-content black-text">
              <span class="card-title"><strong>The Team:</strong></span>
              <br>
              <h6>Justin Gilbert</h6>
              <br>
              <p>PUT IMAGE</p>
              <p>Contact: <a mailto="justin.gilbert@ucc.on.ca">Justin Gilbert</a></p>
              <br>
              <h6>Neel Ismail</h6>
              <br>
              <p>PUT IMAGE</p>
              <p>Contact: <a mailto="neel.ismail@ucc.on.ca">Neel Ismail</a></p>
            </div>
          </div>
        </div>
      </div>

</body>
</html>