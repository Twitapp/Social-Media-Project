<!DOCTYPE html>
<html>
	<head>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <title>About</title>

    <style>

        nav {
          background-color:#015a8e;
          height:80px;
          position:fixed;
          margin-bottom:5px;
          z-index:100;
        }

        .body {
          margin:auto;
          width:70%;
        }

        #about {
          margin-top:75px;
        }
        #team {
          display: block;
          margin:auto;
          width: 89%;
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
            </ul>
          </div>
        </nav>
    	
    <br>

     <div id="about" class="body" class="row">
      <div class="col s12 m6">
          <div class="card white">
            <div class="card-content black-text">
              <span class="card-title"><strong>About:</strong></span>
              <p>On this website, you are able to post tweets with hashtags, see other people's tweets, and search for hashtags, tweets, and users through the search bar</p>
            </div>
          </div>
        </div>
      </div>

    <div class="body" class="row">
      <div class="col s12 m6">
          <div class="card white">
            <div class="card-content black-text">
              <span class="card-title"><strong>Our Goal:</strong></span>
              <p>We want to make an easy to use, effective, and enjoyable social media webpage that allows our users to communicate and express their ideas.</p>
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
              <table id="team" style="border-width:2px solid black">
              <tr>
                <td><h6>Justin Gilbert</h6></td>
                <td><h6>Neel Ismail</h6></td>
              </tr>
              <tr>
              <td><img id="justin" src='https://s2.postimg.org/8k7afvmyx/Photo_on_2017-05-08_at_2.14_PM.jpg' width='400' height='300'></td>
              <td><img id="justin" src='https://s2.postimg.org/8k7afvmyx/Photo_on_2017-05-08_at_2.14_PM.jpg' width='400' height='300'></td>
              </tr>
              <tr>
                <td><p>Contact: <a href="mailto:justin.gilbert@ucc.on.ca">Justin Gilbert</a></p></td>
                <td><p>Contact: <a href="mailto:neel.ismail@ucc.on.ca">Neel Ismail</a></p></td>
              </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
   

</body>
</html>