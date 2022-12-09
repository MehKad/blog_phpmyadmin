const sc1 = document.querySelector("#sc1");
const rand1 = document.querySelector("#rand1");
const nouv = document.querySelector("#new");
const go = document.querySelector("#lance");
const imgg = document.querySelector("#image");

let sc = 0;

function rand_num() {
  x = Math.ceil(Math.random() * 6);
  imgg.style.display = "block";
  imgg.setAttribute("src", `public/images/${x}.svg`);
  rand1.textContent = x;
  sc1.textContent = parseInt(sc1.textContent) + x + sc;
  sc = 0;
  if (x == 1) {
    sc1.textContent = 0;
  }
  if (sc1.textContent >= 100) {
    alert("User 1 won");
  }
}
go.addEventListener("click", rand_num);

function nouveau() {
  sc = 0;
  imgg.style.display = "none";
  sc1.textContent = 0;
  rand1.textContent = 0;
  x = 0;
}
nouv.addEventListener("click", nouveau);
