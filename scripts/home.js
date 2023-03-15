let lis = document.querySelectorAll("li"); // Header Links
let lastLi = lis[lis.length - 1];


// White line effect under each link in navbar
lis.forEach((li) => {
  li.addEventListener("mouseover",() => {
    li.lastElementChild.style.left = "0";
  })

  li.addEventListener("mouseout",() => {
    li.lastElementChild.style.left = li.lastElementChild.offsetWidth+"px";
    setTimeout(() => {
      li.removeChild(li.lastElementChild);
      let span = document.createElement('span');
      li.appendChild(span);
      span.style.left = "-"+(li.lastElementChild.offsetWidth+5)+"px";
    },400)
  })
})

// Making Disconnect Link Functional
lis[2].childNodes[0].addEventListener("click",(event) => {
  event.preventDefault();
  $.post("request.php", {status: "disconnect"})
    .done(() => {
      window.location.href = "index";
    });
})
