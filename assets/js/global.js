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