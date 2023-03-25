/* Toggling between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myheader");
  if (x.className === "header") {
    x.className += " responsive";
  } else {
    x.className = "header";
  }
}

