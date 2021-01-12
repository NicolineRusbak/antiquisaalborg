console.log('Loaded..');


// Burgermenu toggle in the navigationbar at the top
function showMenu() {
    var x = document.getElementById("menu");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }