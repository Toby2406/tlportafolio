//Secciones
addEventListener('DOMContentLoaded', () => {
  const secciones = document.querySelectorAll('.seccion')
  const menuItems  = document.querySelectorAll('.menuItems')
  const funcionObserver = entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const itemActual = Array.from(menuItems).find(item => item.dataset.url === entry.target.id)
        itemActual.classList.add('seleccionado')
        for(const item of menuItems)
        {
          if (item != itemActual) {
            item.classList.remove('seleccionado')
          }
        }
      }
    });

  }
  const observer = new IntersectionObserver(funcionObserver, {
    root: null,
    rootMArgin: '0px',
    threshold: 0.8
  })
  secciones.forEach(seccion => observer.observe(seccion))

})

//Navbar
function NavBar()
{
  $(document).ready(main);
  var contador = 0;
  function main()
  {
    $('.nav_menu').click(function(){
        if (contador == 1)
        {
            $('nav').animate({
              left: '0'
            });
            izq = document.getElementById('izq');//Obtenemos el objeto
            izq.classList.remove('izq');//removemos la clase
            izq.classList.add('ocultar');//Damos nueva clase
            contador = 0;
        }else {
          contador = 1;
          $('nav').animate({
            left: '-100%'
          });
          izq = document.getElementById('izq');//Obtenemos el objeto
          izq.classList.remove('ocultar');//removemos la clase
          izq.classList.add('izq');//Damos nueva clase
        }
    });
  };
}

//Letras circulares
function TextoMundo()
{
    circle = document.getElementById("TM");
    circleArray = circle.textContent.split('');
    circle.textContent = '';

    //Recorrer array
    for (var i = 0; i < circleArray.length; i++) {
      circle.innerHTML += '<span style="transform: rotate('+(i+1)*12+'deg)">'+circleArray[i]+'</span>';

    }
}

//error
function error(id)
{
  id = document.getElementById(id); //Obtenemos id
  id.classList.remove('correcto'); //Removemos la clase anterior
  id.classList.add('error'); //Pasamos nueva clase
}
