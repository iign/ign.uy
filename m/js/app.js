var el = document.querySelector('.js-more')
el.addEventListener('click', function () {
  showMore()
}, false)

function showMore () {
  var intro = document.querySelector('.intro').classList.add('intro--active')
}
