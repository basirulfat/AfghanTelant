export function toggleAccordion() {
  const items = document.querySelectorAll(".accordion button");
  const itemToggle = this.getAttribute("aria-expanded");

  for (let i = 0; i < items.length; i++) {
    items[i].setAttribute("aria-expanded", "false");
  }

  if (itemToggle === "false") {
    this.setAttribute("aria-expanded", "true");
  }
}

document.addEventListener("DOMContentLoaded", function () {
  const items = document.querySelectorAll(".accordion button");
  items.forEach((item) => item.addEventListener("click", toggleAccordion));
});

/*=============== Right Clik prevention ===============*/

export function FAQPreventRightClick() {
  document.addEventListener("contextmenu", function (event) {
    event.preventDefault();
  });
}