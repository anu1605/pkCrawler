var xhttp = new XMLHttpRequest();
// xhttp.onreadystatechange = function () {
//     if (xhttp.readyState == 4 && xhttp.status == 200) {
//         get_date(xhttp);
//     }
// };
xhttp.open("GET", "https://epaper.prabhatkhabar.com/3701200/RANCHI-City/Ranchi-City#page/1/1", true);
xhttp.setRequestHeader("Access-Control-Allow-Origin", "*");
xhttp.send();
console.log(xhttp);