function myFunction() {
    var x = document.getElementById("pwinput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }