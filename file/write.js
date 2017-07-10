var playersRef = firebase.database().ref("players/");

playersRef.set ({
   John: {
      number: 1,
      age: 30
   },

   Amanda: {
      number: 2,
      age: 20
   }
});
