function barra () {

    var w = document.getElementById ( "nav-1" );
    var x = document.getElementById ( "nav-2" );
    var y = document.getElementById ( "nav-3" );
    var z = document.getElementById ( "nav-4" );

    var a = document.getElementById ( "linha1" );
    var b = document.getElementById ( "linha2" );
    var c = document.getElementById ( "linha3" );
    var d = document.getElementById ( "linha4" );

    w.onmouseover = function() {

        a.style.display = " block "

        b.style.display = " none "
        c.style.display = " none "
        d.style.display = " none "

    }

    x.onmouseover = function() {

        b.style.display = " block "

        a.style.display = " none "
        c.style.display = " none "
        d.style.display = " none "

    }

    y.onmouseover = function() {

        c.style.display = " block "

        a.style.display = " none "
        b.style.display = " none "
        d.style.display = " none "

    }

    z.onmouseover = function() {

        d.style.display = " block "

        a.style.display = " none "
        b.style.display = " none "
        c.style.display = " none "

    }
    
}


function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Leia Mais"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Leia Menos"; 
      moreText.style.display = "inline";
    }
  }