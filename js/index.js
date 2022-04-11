let joi = document.getElementById("floatingSelect");
// let mint = `<option value=""></option>`;
const states = [
  "States",
  "Andaman and Nicobar Islands",
  "Andhra Pradesh",
  "Arunachal Pradesh",
  "Assam",
  "Bihar",
  "Chandigarh",
  "Chhattisgarh",
  "Dadra and Nagar Haveli",
  "Daman and Diu",
  "Delhi",
  "Goa",
  "Gujarat",
  "Haryana",
  "Himachal Pradesh",
  "Jammu and Kashmir",
  "Jharkhand",
  "Karnataka",
  "Kerala",
  "Ladakh",
  "Lakshadweep",
  "Madhya Pradesh",
  "Maharashtra",
  "Manipur",
  "Meghalaya",
  "Mizoram",
  "Nagaland",
  "Odisha",
  "Puducherry",
  "Punjab",
  "Rajasthan",
  "Sikkim",
  "Tamil Nadu",
  "Telangana",
  "Tripura",
  "Uttar Pradesh",
  "Uttarakhand",
  "West Bengal",
];
let second = document.getElementById("datalistOptions");
let write = document.getElementById("demo");
joi.innerHTML = states.map(function (st) {
  return "<option>" + st + "</option>";
});

let er = document.getElementById("svg");
// https://www.google.com/maps/place/
let em = document.getElementById("nav");
let place = document.getElementById("place");
let plac = document.getElementById("place1");
setInterval(() => {
  if (joi.value === "States") {
    // write.innerText = "";
    place.innerText = "Location";
    plac.innerText = "Location";
  } else {
    // write.innerText = joi.value;
    place.innerHTML =
      `<a target="_blank" href="https://www.google.com/maps/place/` +
      joi.value +
      `">` +
      joi.value +
      `</a>`;
    plac.innerHTML =
      `<a target="_blank" href="https://www.google.com/maps/place/` +
      joi.value +
      `">` +
      joi.value +
      `</a>`;
  }
  console.log(window.scrollY);
  if (window.scrollY < 140) {
    em.style.background = "transparent";
    // er.style.visibility = "initial";
    // er.style.position = "fixed";
  } else if (window.scrollY > 350) {
    // em.style.background = "linear-gradient(to top, transparent, rgb(192, 211, 252), royalblue)";
    em.style.background = "rgb(193, 255, 224)";
    // er.style.visibility = "hidden";
  }
}, 1000);
console.log('working');

