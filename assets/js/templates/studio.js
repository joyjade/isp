document.addEventListener("DOMContentLoaded", function() { 
  checkNotice()
	handleCloseNotice()
});

function checkNotice() {
  let status = window.localStorage.getItem('notice');
  console.log(status);
  if (status == 'open' || status == null) {
    console.log("I'm open");
    showNotice()
  } else {
    console.log("nah i'm closed");
  }
}

function showNotice() {
  let notice = document.querySelector('.notice');
  notice.classList.add('show');
}
function closeNotice() {
  let notice = document.querySelector('.notice');

  notice.classList.remove('show');
  window.localStorage.setItem('notice', 'close');
}

function handleCloseNotice() {
  let closeButton = document.querySelector('.close');

  document.addEventListener('click', function (e) {
    if (closeButton.contains(e.target)){
      closeNotice(); 
    }
  })
}