console.log('Loaded..');


  function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }


  
  // Script til at skifte content (Sælg/Find) - det skal redigeres, men kan ikke få det til at virke uden de specifikke id's
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
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();