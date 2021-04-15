listenInviteLinkCopy()
function listenInviteLinkCopy() {
  var cpBtn = document.getElementById("copyRefCodeBtn")
  $(".header__ref").on("click", function () {
    var refLink = document.getElementById("refLink").innerText
    var cpRefLinkBtn = document.getElementById("cpRefLinkBtn")
    navigator.clipboard.writeText(refLink)
    cpRefLinkBtn.innerText = "Đã sao chép"
    setTimeout(() => {
      cpRefLinkBtn.innerText = "Sao chép"
    }, 3000)
  })
  cpBtn.addEventListener("click", function (event) {
    var refCode = document.getElementById("refCode").innerText
    navigator.clipboard.writeText(refCode)
    cpBtn.innerText = "Đã sao chép"
    setTimeout(() => {
      cpBtn.innerText = "Sao chép"
    }, 3000)
  })
}
