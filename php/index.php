<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
 

</body>

</html>


// print_r(explode('<div class="col-12 sm-col-4 md-col-4 card-box">', file_get_contents("https://epaper.prabhatkhabar.com/")));
// echo explode('<div class="col-md-12">', file_get_contents("https://epaper.prabhatkhabar.com/"))[1];
// echo file_get_contents("https://epaper.sangbadpratidin.in/epaper/edition/3464/sangbad-pratidin-04-05-23/page/8");
// echo file_get_contents("http://newspaper.pudhari.co.in/editionpage.php?edn=Mumbai&edid=PUDHARI_MUM&pid=PUDHARI_MUM&issueid=PUDHARI_MUM_20230504&pn=1#Page/7");
// echo file_get_contents("https://www.glpublications.in/PurvanchalPrahari/Guwahati/03-May-2023/Page-5");
// echo file_get_contents("http://epaper.sikkimexpress.com/date/2023-05-03/#page2");
// echo file_get_contents("https://epaper.prabhatkhabar.com/");

// $cityArrayOriginal = array(
//     "18525" => "Garhwa", "6185" => "RANCHI - City", "18526" => "Hazaribagh Chatra", "18527" => "Gumla", "18528" => "Koderma", "18529" => "Khalari", "18530" => "Khunti", "18532" => "Lohardaga", "18534" => "Palamu", "18536" => "Ramgarh", "18538" => "Silli", "6192" => "PATNA - City", "18557" => "ARRAH", "18558" => "BEGUSARAI", "18560" => "BIHARSHARIF", "18567" => "BUXAR", "18572" => "GOPALGANJ", "18576" => "HAJIPUR", "18577" => "JEHANABAD", "18578" => "SARAN", "18579" => "SIWAN", "30166" => "BALLIA", "6244" => "KOLKATA - City", "6235" => "SILIGURI - City", "18661" => "SILPANCHAL", "6232" => "JAMSHEDPUR - City", "18612" => "CHAIBASA", "18614" => "GHATSILA", "18613" => "CHANDIL", "30159" => "ROURKELA", "33089" => "BHUBANESWAR", "6236" => "DHANBAD - City", "18616" => "BOKARO", "18617" => "GIRIDIH", "6228" => "DEOGHAR - City", "18619" => "JAMTARA", "18618" => "DUMKA", "18621" => "GODDA", "18620" => "SAHIBGANJ", "25463" => "PAKUR", "6211" => "MUZAFFARPUR - City", "18633" => "BETIAH", "18635" => "DARBHANGA", "18636" => "MADHUBANI", "18637" => "MOTIHARI", "18639" => "SITAMARAHI", "18640" => "SAMSTIPUR", "6218" => "BHAGALPUR - City", "23762" => "KISHANGANJ", "18622" => "ARARIA", "18623" => "BANKA", "18625" => "KATIHAR", "18626" => "KHAGARIA", "18627" => "LAKHISARAI", "19402" => "JAMUI", "18628" => "MADHEPURA", "18629" => "MUNGER", "18630" => "PURNIA", "18631" => "SAHRSA", "18632" => "SUPAUL", "6204" => "GAYA - City", "18657" => "KAIMUR", "18658" => "SASARAM", "18659" => "AURANGABAD", "18660" => "NAWADA"
// );

// $cityArray = array("6185" => "RANCHI - City", "6192" => "PATNA - City", "KOLKATA - City", "SILIGURI - City", "JAMSHEDPUR - City", "DHANBAD - City", "DEOGHAR - City", "MUZAFFARPUR - City", "BHAGALPUR - City", "6204" => "GAYA - City");
// $array = array("6185" => "RANCHI - City");
// foreach ($array as $key => $value){

//     echo file_get_contents("https://epaper.prabhatkhabar.com/t/" . $key);html content incomplete
// }

<?php

// echo file_get_contents("https://keralakaumudi.com/epaper/article");working
// echo file_get_contents("https://epaper.jansatta.com/t/22558/latest/चंडीगढ़");same as prabhat khabar
// echo file_get_contents("https://www.enewspapr.com/News/NAVABHARAT/MUM/2023/05/05/20230505_3.jpg"); imageLink
// echo file_get_contents("https://epaper.navhindtimes.in/mainpage.aspx?pdate=2023-05-03");working
// echo file_get_contents("https://niyomiyabarta.com/epaper/05052023/images/p2/main.gif");working
// echo file_get_contents("https://odishabhaskar.com/epaper/edition/3727/odisha-bhaskar/page/1");working
// echo file_get_contents("https://www.prameyaepaper.com/");same as prabhat khabar
// echo file_get_contents("https://e2india.com/pratidin/");same as sangbad pratidin
// echo file_get_contents("https://www.glpublications.in/PurvanchalPrahari/Guwahati/05-May-2023/Page-2");working
// echo file_get_contents("http://rashtriyasahara.com/epaper/1/71/2023-05-05/1");http://sahara.4cplus.net/epaperimages//04052023//04052023-hr-md-1ll.png

// echo file_get_contents("https://www.bhaskar.com/epaper/detail-page/ranchi/109/2023-05-05?pid=3");



// echo file_get_contents("https://epaper.prabhatkhabar.com/3699317/RANCHI-City/RANCHI-City#page/1/1");
// echo file_get_contents("https://epaper.esakal.com/FlashClient/Client_Panel.aspx#currPage=2");

// file_put_contents(dirname(__FILE__, 2) . "/php/nd.txt", file_get_contents("https://epaper.naidunia.com/epaper/11-may-2023-52-gwalior-edition-gwalior.html"));
$url = "https://epaper.naidunia.com/epaper/11-may-2023-52-gwalior-edition-gwalior.html";

file_put_contents(dirname(__FILE__, 1) . '/section.txt', (explode('<div class="slidebox" id="item-zoom1">', file_get_contents($url))[1]));

?>