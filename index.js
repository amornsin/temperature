
var db = firebase.database().ref("temp/");

db.on("value", function(data) {
   var temp = data.val();
   console.log(temp);
   document.getElementById('temp').innerHTML = temp + "  ํC";
});
