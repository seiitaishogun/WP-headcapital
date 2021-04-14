$(function () {
  toggleSidebar()
  scrollToAnchor()
  showLoader()
  function showLoader() {
    let loader = document.createElement("div")
    loader.setAttribute("id", "loader")
    loader.classList.add("loader")
    loader.innerHTML = `<img src="images/hc-loading.gif" alt="loader" />`
    $(".main__content").not(".no-loading").append(loader)
    setTimeout(() => {
      let currentLoader = $("#loader")
      if (currentLoader) currentLoader.remove()
      fadeInUpTitle()
    }, 1000)
  }
  function scrollToAnchor() {
    $(".js-scroll-to").on("click", function (event) {
      var $anchor = $(this)
      var headerH = 90
      $("html, body")
        .stop()
        .animate(
          {
            scrollTop: $($anchor.attr("href")).offset().top - headerH + "px"
          },
          300
        )
      event.preventDefault()
    })
  }
  function toggleSidebar() {
    var activeClass = "main-active"
    $(".togglerSidebar").on("click", function (event) {
      if (document.body.classList.contains(activeClass)) {
        document.body.classList.remove(activeClass)
        $("#sidebarBackdrop").removeClass("show")
      } else {
        document.body.classList.add(activeClass)
        $("#sidebarBackdrop").addClass("show")
      }
    })
    $("#sidebarBackdrop").on("click", function (event) {
      event.target.classList.remove("show")
      document.body.classList.remove(activeClass)
    })
  }
  function fadeInUpTitle() {
    const title = document.querySelector(".main-title")
    if (title) {
      title.classList.add("animated")
      title.classList.add("animatedFadeInUp")
      title.classList.add("fadeInUp")
    }
  }
})
