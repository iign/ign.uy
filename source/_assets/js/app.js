function sayHi () {
  if (!document.querySelector('.hallo')) { return }
  let hallo = document.querySelector('.hallo')
  let items = ['Hallo', 'Hola', '👋', 'Hi']
  let item = items[Math.floor(Math.random() * items.length)]
  hallo.innerHTML = item
}

document.addEventListener('DOMContentLoaded', function (event) {
  sayHi()
})
