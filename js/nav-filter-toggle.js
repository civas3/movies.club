//nav filter grow 130px on click

  function growDiv() {
    var growDiv = document.getElementById('grow');
    if (growDiv.clientHeight) {
      growDiv.style.height = 0;
    } else {
      var wrapper = document.querySelector('.measuringWrapper');
      growDiv.style.height = "130px";
      
    }    
  }
