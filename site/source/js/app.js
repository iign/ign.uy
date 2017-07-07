var el = document.querySelector('.js-more')
if (el) {
  el.addEventListener('click', function () {
    showMore()
  }, false)
}

function showMore () {
  var intro = document.querySelector('.intro').classList.add('intro--active')
}

function sayHi () {
  if (!document.querySelector('.hallo')) { return }
  var hallo = document.querySelector('.hallo')
  var items = ['Hallo', 'Hola', '👋', 'Hey']
  var item = items[Math.floor(Math.random() * items.length)]
  hallo.innerHTML = item
}

document.addEventListener('DOMContentLoaded', function (event) {
  sayHi()
})
