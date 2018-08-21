let el = document.querySelector('.js-more')
if (el) {
  el.addEventListener('click', function () {
    showMore()
  }, false)
}

function showMore () {
  document.querySelector('.intro').classList.add('intro--active')
}

function sayHi () {
  if (!document.querySelector('.hallo')) { return }
  let hallo = document.querySelector('.hallo')
  let items = ['Hallo', 'Hola', '👋', 'Hey']
  let item = items[Math.floor(Math.random() * items.length)]
  hallo.innerHTML = item
}

document.addEventListener('DOMContentLoaded', function (event) {
  sayHi()
})
