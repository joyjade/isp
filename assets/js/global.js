document.addEventListener("DOMContentLoaded", function () { 
  menu();

  var options = {
    // vertical offset in px before element is first unpinned
    offset : 0,
    // or you can specify offset individually for up/down scroll
    offset: {
        up: 100,
        down: 50
    },
    // scroll tolerance in px before state changes
    tolerance : 10,
    // or you can specify tolerance individually for up/down scroll
    tolerance : {
        up : 5,
        down : 0
    }
  };
  
  var nav = document.querySelector("nav");
  var headroom = new Headroom(nav, options);
  headroom.init();
});



function menu() {
  let drawer = document.querySelector('.drawer');
  let menutoggle = document.querySelector('.menu');
  let eyes = document.querySelectorAll('.eye');

  document.addEventListener('click', function (e) {
    if (menutoggle.contains(e.target)){
      drawer.classList.toggle('open');
      menutoggle.classList.toggle('open');
    } else if (drawer.classList.contains('open') && !drawer.contains(e.target)) {
      drawer.classList.remove('open');
      menutoggle.classList.remove('open');
    }
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