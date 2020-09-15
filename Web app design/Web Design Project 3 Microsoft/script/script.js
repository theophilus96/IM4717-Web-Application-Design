document.querySelector(".menu-btn").addEventListener("click", () => {
  document.querySelector(".main-menu").classList.toggle("show");

  // When menu is open, prevent from scrolling
  if (document.querySelector(".main-menu").classList.contains("show")) {
    document.body.classList.add("fixedPosition");
  } else {
    document.body.classList.remove("fixedPosition");
  }
});
