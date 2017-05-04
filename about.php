<!DOCTYPE html>
<html>
	<head>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <title>Profile</title>

    <style>

        nav {
          background-color:#ff0000;
          height:115px;
          position:fixed;
          margin-bottom:5px;
          z-index:100;
        }

        #logo {
          width:80px;
          height:80px;
          margin-right:25px;
          margin-top:10px;
        }

        .body {
          float:right;
          width:65%;
        }

        #welcome {
          margin-top:100px;
          margin-right:25px;
        }

        .combined-row {
          width:30%;
          position:absolute;
          margin-top:-5px;
          float:left;
          margin-left:25px;
        }

        #about {
          margin-top:50px;
        position: absolute;
    height: 200px;
    width: 400px;
    margin: -100px 0 0 -200px;
    top: 30%;
    left: 50%;

        }

        #make-tweet {
          margin-top:310px;
        }

        #post-tweet {
          border-radius:10px;
          border-color: #b2b2b2;
          width:330px;
          height:104px;
          padding:7px;
        }

        #latest-tweets {
          padding-top:-20px;
          position:relative;
          margin-top:-10px;
          margin-right:25px;
          clear:both;
        }

        .page-footer {
          background-color:#ff0000;
          clear:both;
        }

    </style>
	</head>
	<body style="background-color:#fcfcfc">

    <div>

        <nav>
          <div class="nav-wrapper">
            <a href="#" class="brand-logo center" style="margin-top:-15px"><h1><strong>Twitter</strong></h1></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="edit.php">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="help.php">Help</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><img id="logo" src="twitter-logo-orange.png" /></li>
            </ul>
          </div>
        </nav>
    	
    <br>
    </div>
    </body>
     <div id="about" class="combined-row" class="row">
      <div class="col s12 m6">
          <div class="card white">
              <div class="card-content black-text">
              <span class="card-title">About</span>
              On this website, you are able to post tweets with hashtags, see other people's tweets, and search for hashtags, tweets, and users through the search bar
                  <br>
                  <br>
              <span class="card-title">Our Goal</span>
              We want to make an easy to use, effective, and enjoyable social media webpage that allows our users to communication and express their ideas.
              	<br>
              	<br>
              <span class="card-title">Our Contact</span>
              <ul>
                  <li><a class="black-text"target="_blank">justin.gilbert@ucc.on.ca</a></li>
                  <li><a class="black-text" target="_blank">neel.ismail@ucc.on.ca</a></li>
                </ul>
                <br>
              </div>
              </div>
          </div>
      </div>
    </div>
   </html>