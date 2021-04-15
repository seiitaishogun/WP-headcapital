menuDropdown()
function menuDropdown() {
  var controllers = document.getElementsByClassName(
    "main__sidebar__menu-item-controller"
  )
  for (var i = 0; i < controllers.length; i++) {
    let controller = controllers[i]
    controller.addEventListener("click", function (event) {
      var activeClass = "active"
      var targetMenuItem = event.target
      if (controller.contains(targetMenuItem)) {
        if (controller.parentElement.classList.contains(activeClass)) {
          controller.parentElement.classList.remove(activeClass)
        } else {
          controller.parentElement.classList.add(activeClass)
        }
      }
    })
  }
}
