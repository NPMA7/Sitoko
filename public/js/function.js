
// Show Hidden Pass

function togglepwd() {
    var x = document.getElementById("pwd"),
    icon = document.getElementById("togglepwd");
    
    if (x.type === "password") {
      x.type = "text";
      icon.classList.replace("fa-eye", "fa-eye-slash");
   
    } else {
      x.type = "password";
      icon.classList.replace("fa-eye-slash", "fa-eye");
     
    }
  }

function togglepass() {
    var x = document.getElementById("pass"),
    icon = document.getElementById("togglepass");
    
    if (x.type === "password") {
      x.type = "text";
      icon.classList.replace("fa-eye", "fa-eye-slash");
   
    } else {
      x.type = "password";
      icon.classList.replace("fa-eye-slash", "fa-eye");
     
    }
  }

  function hamburger() {
    var x = document.getElementById("hamburger");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }