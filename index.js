
var db = firebase.database().ref("temp/");

db.on("child_changed", function(data) {
   var temp = data.val();
   console.log(temp);
   document.getElementById('temp').innerHTML = temp + "  ํC";
});
