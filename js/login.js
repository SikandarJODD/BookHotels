let btnS = document.getElementById("btng");
let form2 = document.getElementById("form2");
let form1 = document.getElementById("form1");
btnS.addEventListener("click", () => {
  form1.style.display = "none";
  form2.classList.add("dl");
});