function myFunction() {
    var x = document.getElementById("admin2");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }