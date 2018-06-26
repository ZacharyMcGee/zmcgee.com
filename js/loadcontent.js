var firebaseRef = firebase.database().ref();
var categoryRef = firebaseRef.child("category/design/isometric/");

//loadcontent();

function loadcontent() {
    var i = 1;
   categoryRef.once("value").then(function (snapshot) {
        snapshot.forEach(function (childSnapshot) {
          var colelement = ("col" + i);

          document.getElementById(colelement).innerHTML = "<div id=\"content" + i + "\" class=\"content-posts\"></div>";
            var key = childSnapshot.key;

            //get data for each element in the db
            var childData = childSnapshot.val();
            var description = childSnapshot.val().description;
            var url = childSnapshot.val().url;
            var image = childSnapshot.val().image;

            document.getElementById('content' + i).innerHTML += "<div class=\"card\"><a href=/\"" + url + "\"><img src=\"" + image + "\"></a></div>";
        });
    });
}
