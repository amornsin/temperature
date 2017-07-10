<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<style media="screen">
  body {
    color: #0F0;
  }
  .ch-wi {
    font-size: 20em;
    text-align: center;
    margin-top: 10%;
  }
</style>

  </head>
  <body style="background-color:#000;">

    <div class="container-fluid">
      <div class="col-md-12 ch-wi">
        <div id="temp">0  ํC</div>
      </div>
    </div>




    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>
    <script>
      // Initialize Firebase
      var config = {
        apiKey: "AIzaSyALUVltcDBkhPhmCwH9oQqnohcGwKP3uy4",
        authDomain: "dht22.firebaseapp.com",
        databaseURL: "https://dht22.firebaseio.com",
        projectId: "firebase-dht22",
        storageBucket: "firebase-dht22.appspot.com",
        messagingSenderId: "984500337315"
      };
      firebase.initializeApp(config);
    </script>

    <script src="index.js"> </script>
  </body>
</html>
