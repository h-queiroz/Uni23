let lis = document.querySelectorAll("li"); // Header Links


// White line effect under each link in navbar
lis.forEach((li) => {
  li.addEventListener("mouseover",() => {
    li.lastElementChild.style.left = "0";
  })

  li.addEventListener("mouseout",() => {
    li.lastElementChild.style.left = "124px";
    setTimeout(() => {
      li.removeChild(li.lastElementChild);
      let span = document.createElement('span');
      span.style.left = "-124px";
      li.appendChild(span);
    },400)
  })

  li.firstElementChild.addEventListener("click",(event) => {
    event.preventDefault();
  })
})
