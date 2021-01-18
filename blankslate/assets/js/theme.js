console.log('Loaded..');


// // Burgermenu toggle in the navigationbar at the top
// function showMenu() {
//     const x = document.getElementById("menu");
//     if (x.style.display === "block") {
//       x.style.display = "none";
//     } else {
//       x.style.display = "block";
//     }
//   }

function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}



// Script til at skifte content (Sælg/Find) - det skal redigeres, men kan ikke få det til at virke uden de specifikke id's
// Get the element with id="defaultOpen" and click on it
window.onload = function () {
  startTab();
};

function startTab() {
  document.getElementById("defaultOpen").click();

}

function tabChange(tabContent) {
  var i, tabcontent;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
  
  }
  document.getElementById(tabContent).style.display = "block";
  var texts = document.getElementsByClassName('text');
  for (var i = 0; i < texts.length; i++) {
    if (texts[i].classList.contains(tabContent)) {
      texts[i].classList.add('show');
    } else {
      texts[i].classList.remove('show');
    }
  }

}



const acc = document.getElementsByClassName("accordion");
let i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}