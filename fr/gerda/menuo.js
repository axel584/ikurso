function MontrerMenu(j) {  
    //CacherMenus();
    document.getElementById("smenu"+j).style.visibility="visible";
 }

function CacherMenus() {
    for(i=1;i<=4;i++) {
      with(document.getElementById("smenu"+i).style) {
        visibility="hidden";
      }
    }
  }
