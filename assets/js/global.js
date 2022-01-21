document.addEventListener("DOMContentLoaded", function () { 
  menu();

  var nav = document.querySelector("nav");
  var headroom = new Headroom(nav);
  console.log(headroom);
  headroom.init();
});



function menu() {
  let drawer = document.querySelector('.drawer');
  let menutoggle = document.querySelector('.menu');

  menutoggle.addEventListener('click', function () {
    drawer.classList.toggle('open');
  })
}

function hoverReveal(selector) {
  let titles = document.querySelectorAll(selector);
  
  titles.forEach(title => {
    let id = title.dataset.id 
    if (id.includes('/')) { id = id.split('/')[1]} 
    let img = document.getElementById(id);

    title.onmouseover = function () {
      img.style.opacity = "1";
      console.log(img);
    };
    title.onmouseleave = function () {
      img.style.opacity = "0";
    }
	})	
}