const htnames = [
  "Hotel Leela",
  "Waterstones",
  "Sun-N-Sand",
  "the Lalit",
  "Svenska Design Hotels",
  "ITC Grand Central",
  "Taj Mahal Palace",
  "President Mumbai",
  "Taj Lands Ends ",
  "Trident Nariman Point",
  "Trident Bandra Kurla",
  "JW Marriot Juhu",
  "Radisson Blue",
  "Hotel Intercontinental",
  "St. Regis Mumbai",
];
let dataList = document.getElementById("datalistOptions");
let btnUser = document.getElementById("btnF");
let showInfo = document.getElementById("showUser");
btnUser.addEventListener("click", () => {
  let name1 = document.getElementById("name1");
  showInfo.innerHTML =
    ` <section class="container mt-5">
  <div class="alert alert-success alert-dismissible fade show " role="alert">
      <strong>Congratulations ` +
    name1.value +
    ` </strong> Visit 
     Hotel For Payment
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</section>`;
});


dataList.innerHTML = htnames.map(function (ht) {
  console.log(ht);
  return "<option>" + ht + "</option>";
});
