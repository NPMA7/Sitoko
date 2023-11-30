// pesanan 


function semua() {
    
    let a = document.getElementById("semua");
    let b = document.getElementById("topay");
    let c = document.getElementById("dikemas");
    let d = document.getElementById("dikirim");
    let e = document.getElementById("selesai");


    if (a.style.display === "block") {
      b.style.display = "none";
      c.style.display = "none";
      d.style.display = "none";
      e.style.display = "none";
    }
   

    else {
      a.style.display = "block";
      b.style.display = "none";
      c.style.display = "none";
      d.style.display = "none";
      e.style.display = "none";
    }
}
function topay(){

    let a = document.getElementById("semua");
    let b = document.getElementById("topay");
    let c = document.getElementById("dikemas");
    let d = document.getElementById("dikirim");
    let e = document.getElementById("selesai");


    if (b.style.display === "block") {
        a.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
        e.style.display = "none";
      }
      else {
        b.style.display = "block";
        a.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
        e.style.display = "none";
      }
    }
function dikemas(){
    
    let a = document.getElementById("semua");
    let b = document.getElementById("topay");
    let c = document.getElementById("dikemas");
    let d = document.getElementById("dikirim");
    let e = document.getElementById("selesai");

 
    if (c.style.display === "block") {
        a.style.display = "none";
        b.style.display = "none";
        d.style.display = "none";
        e.style.display = "none";
      }
      else {
        c.style.display = "block";
        a.style.display = "none";
        b.style.display = "none";
        d.style.display = "none";
        e.style.display = "none";
      }
    }
function dikirim(){
    
    let a = document.getElementById("semua");
    let b = document.getElementById("topay");
    let c = document.getElementById("dikemas");
    let d = document.getElementById("dikirim");
    let e = document.getElementById("selesai");


      if (d.style.display === "block") {
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        e.style.display = "none";
      }
      else {
        d.style.display = "block";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        e.style.display = "none";
      }
    }
function selesai(){

    let a = document.getElementById("semua");
    let b = document.getElementById("topay");
    let c = document.getElementById("dikemas");
    let d = document.getElementById("dikirim");
    let e = document.getElementById("selesai");


      if (e.style.display === "block") {
        a.style.display = "none";
        b.style.display = "none";
        d.style.display = "none";
        c.style.display = "none";
      }
      else {
        e.style.display = "block";
        a.style.display = "none";
        b.style.display = "none";
        d.style.display = "none";
        c.style.display = "none";
      
      }
    }

