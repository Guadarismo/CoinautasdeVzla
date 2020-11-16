$(document).ready(function () {
<?php
$str = file_get_contents('https://3rdparty-apis.coinmarketcap.com/v1/cryptocurrency/widget?id=1&convert=BTC,USD,EUR');

$json = json_decode($str, true); // decode the JSON into an associative array
//echo '<pre>' . print_r($json, true) . '</pre>';

$GETUSD = $json['data']['1']['quote']['USD']['price'];
$GETEUR = $json['data']['1']['quote']['EUR']['price'];

$strVES = file_get_contents('https://3rdparty-apis.coinmarketcap.com/v1/cryptocurrency/widget?id=1&convert=BTC,USD,VES');
$strCAD = file_get_contents('https://3rdparty-apis.coinmarketcap.com/v1/cryptocurrency/widget?id=1&convert=BTC,USD,CAD');
$strCOP = file_get_contents('https://3rdparty-apis.coinmarketcap.com/v1/cryptocurrency/widget?id=1&convert=BTC,USD,COP');
$strARS = file_get_contents('https://3rdparty-apis.coinmarketcap.com/v1/cryptocurrency/widget?id=1&convert=BTC,USD,ARS');
$strCLP = file_get_contents('https://3rdparty-apis.coinmarketcap.com/v1/cryptocurrency/widget?id=1&convert=BTC,USD,CLP');
$strBOLI = file_get_contents('https://3rdparty-apis.coinmarketcap.com/v1/cryptocurrency/widget?id=1&convert=BTC,USD,BOLI');
$strBRL = file_get_contents('https://3rdparty-apis.coinmarketcap.com/v1/cryptocurrency/widget?id=1&convert=BTC,USD,BRL');
$strAREPA = file_get_contents('https://3rdparty-apis.coinmarketcap.com/v1/cryptocurrency/widget?id=1&convert=BTC,USD,AREPA');
$strDOGE = file_get_contents('https://3rdparty-apis.coinmarketcap.com/v1/cryptocurrency/widget?id=1&convert=BTC,USD,DOGE');
$strETH = file_get_contents('https://3rdparty-apis.coinmarketcap.com/v1/cryptocurrency/widget?id=1&convert=BTC,USD,ETH');
$strBAT = file_get_contents('https://3rdparty-apis.coinmarketcap.com/v1/cryptocurrency/widget?id=1&convert=BTC,USD,BAT');
$strXMR = file_get_contents('https://3rdparty-apis.coinmarketcap.com/v1/cryptocurrency/widget?id=1&convert=BTC,USD,XMR');
$strDASH = file_get_contents('https://3rdparty-apis.coinmarketcap.com/v1/cryptocurrency/widget?id=1&convert=BTC,USD,DASH');
$strADA = file_get_contents('https://3rdparty-apis.coinmarketcap.com/v1/cryptocurrency/widget?id=1&convert=BTC,USD,ADA');
$strLTC = file_get_contents('https://3rdparty-apis.coinmarketcap.com/v1/cryptocurrency/widget?id=1&convert=BTC,USD,LTC');
$strPIVX = file_get_contents('https://3rdparty-apis.coinmarketcap.com/v1/cryptocurrency/widget?id=1&convert=BTC,USD,PIVX');
$strSTEEM = file_get_contents('https://3rdparty-apis.coinmarketcap.com/v1/cryptocurrency/widget?id=1&convert=BTC,USD,STEEM');
$strBTT = file_get_contents('https://3rdparty-apis.coinmarketcap.com/v1/cryptocurrency/widget?id=1&convert=BTC,USD,BTT');
$strFIL = file_get_contents('https://3rdparty-apis.coinmarketcap.com/v1/cryptocurrency/widget?id=1&convert=BTC,USD,FIL');
$strLBC = file_get_contents('https://3rdparty-apis.coinmarketcap.com/v1/cryptocurrency/widget?id=1&convert=BTC,USD,LBC');
$strYFI = file_get_contents('https://3rdparty-apis.coinmarketcap.com/v1/cryptocurrency/widget?id=1&convert=BTC,USD,YFI');
$RND = 'https://bitven.com/assets/js/rates.js?' . rand();
$strBITVEN = file_get_contents($RND);

$jsonBITVEN = json_decode($strBITVEN, true); // decode the JSON into an associative array
$jsonVES = json_decode($strVES, true);
$jsonCAD = json_decode($strCAD, true);
$jsonCOP = json_decode($strCOP, true);
$jsonARS = json_decode($strARS, true);
$jsonCLP = json_decode($strCLP, true);
$jsonBOLI = json_decode($strBOLI, true);
$jsonBRL = json_decode($strBRL, true);
$jsonAREPA = json_decode($strAREPA, true);
$jsonDOGE = json_decode($strDOGE, true);
$jsonETH = json_decode($strETH, true);
$jsonBAT = json_decode($strBAT, true);
$jsonXMR = json_decode($strXMR, true);
$jsonDASH = json_decode($strDASH, true);
$jsonADA = json_decode($strADA, true);
$jsonLTC = json_decode($strLTC, true);
$jsonPIVX = json_decode($strPIVX, true);
$jsonSTEEM = json_decode($strSTEEM, true);
$jsonBTT = json_decode($strBTT, true);
$jsonFIL = json_decode($strFIL, true);
$jsonLBC = json_decode($strLBC, true);
$jsonYFI = json_decode($strYFI, true);

//echo '<pre>' . print_r($jsonBITVEN, true) . '</pre>';

$GETBITVEN = $jsonBITVEN['USD_TO_BSF_RATE'];
$GETVES = $jsonVES['data']['1']['quote']['VES']['price'];
$GETCAD = $jsonCAD['data']['1']['quote']['CAD']['price'];
$GETCOP = $jsonCOP['data']['1']['quote']['COP']['price'];
$GETARS = $jsonARS['data']['1']['quote']['ARS']['price'];
$GETCLP = $jsonCLP['data']['1']['quote']['CLP']['price'];
$GETBOLI = $jsonBOLI['data']['1']['quote']['BOLI']['price'];
$GETBRL = $jsonBRL['data']['1']['quote']['BRL']['price'];
$GETAREPA = $jsonAREPA['data']['1']['quote']['AREPA']['price'];
$GETDOGE = $jsonDOGE['data']['1']['quote']['DOGE']['price'];
$GETETH = $jsonETH['data']['1']['quote']['ETH']['price'];
$GETBAT = $jsonBAT['data']['1']['quote']['BAT']['price'];
$GETXMR = $jsonXMR['data']['1']['quote']['XMR']['price'];
$GETDASH = $jsonDASH['data']['1']['quote']['DASH']['price'];
$GETADA = $jsonADA['data']['1']['quote']['ADA']['price'];
$GETLTC = $jsonLTC['data']['1']['quote']['LTC']['price'];
$GETPIVX = $jsonPIVX['data']['1']['quote']['PIVX']['price'];
$GETSTEEM = $jsonSTEEM['data']['1']['quote']['STEEM']['price'];
$GETBTT = $jsonBTT['data']['1']['quote']['BTT']['price'];
$GETFIL = $jsonFIL['data']['1']['quote']['FIL']['price'];
$GETLBC = $jsonLBC['data']['1']['quote']['LBC']['price'];
$GETYFI = $jsonYFI['data']['1']['quote']['YFI']['price'];

echo '
var arrgetusd = ' . $GETUSD . ';
var arrgeteur = ' . $GETEUR . ';
var arrgetves = ' . $GETVES . ';
var GETCAD = ' . $GETCAD . ';
var getbrl = ' . $GETBRL . ';
var getcop = ' . $GETCOP . ';
var getrefcmc = arrgetves/arrgetusd;
var bitvenref = 0;
var GETARS = ' . $GETARS . ';
var getclp = ' . $GETCLP . ';

/*eCoins:*/

var GETBOLI = ' . $GETBOLI . ';
var GETAREPA = ' . $GETAREPA . ';
var GETDOGE = ' . $GETDOGE . ';
var GETETH = ' . $GETETH . ';
var GETBAT = ' . $GETBAT . ';
var GETXMR = ' . $GETXMR . ';
var GETDASH = ' . $GETDASH . ';
var GETADA = ' . $GETADA . ';
var GETLTC = ' . $GETLTC . ';
var GETPIVX = ' . $GETPIVX . ';
var GETSTEEM = ' . $GETSTEEM . ';
var GETBTT = ' . $GETBTT . ';
var GETFIL = ' . $GETFIL . ';
var GETLBC = ' . $GETLBC . ';
var GETYFI = ' . $GETYFI . ';
var GETSAT = 100000000;
var GETVESAT = (arrgetves / GETSAT).toFixed(2);
var REFUSDSAT = ((1 / arrgetusd) * GETSAT).toFixed(2);

/*Variables traidas de pag DolToday*/

var GETDOLTODAY = dolartoday.USD.dolartoday;
var GETDOLTODAYBTC = dolartoday.USD.bitcoin_ref;
var GETDOLTODAYLOCBTC = dolartoday.USD.localbitcoin_ref;

/*Variable traida de Monitor Dolar Venezuela*/

var GETMNTDOLVZLA = mntvzla.usd_to_ves_price
var GETVESATMNTDOLVZLA = ((GETMNTDOLVZLA*arrgetusd) / GETSAT).toFixed(2);
';

?>

$("#GETUSD").text((arrgetusd).toFixed(2));
$("#GETEUR").text((arrgeteur).toFixed(2));
$("#refcmc").text('CMC: ' + getrefcmc);
$("#GETVESAT").text(GETVESATMNTDOLVZLA);
$("#REFUSDSAT").text(REFUSDSAT);

	var ak = 1;
	$("#SAT").val(ak);

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / GETSAT)).toFixed(8));
    $("#EUR").val((ak * (arrgeteur / GETSAT)).toFixed(8));
    $("#CAD").val((ak * (GETCAD / GETSAT)).toFixed(8));
    $("#BRL").val((ak * (getbrl / GETSAT)).toFixed(8));
    $("#COP").val((ak * (getcop / GETSAT)).toFixed(2));
    $("#VESCMC").val((ak * (arrgetves / GETSAT)).toFixed(2));
    $("#VESBITVEN").val(((ak * bitvenref * arrgetusd) / GETSAT).toFixed(2));
    $("#ARS").val((ak * (GETARS / GETSAT)).toFixed(8));
    $("#CLP").val((ak * (getclp / GETSAT)).toFixed(8));
	$("#VESDOLTODAY").val(((ak * GETDOLTODAY  * arrgetusd) / GETSAT).toFixed(2));
	$("#VESDOLTODAYBTC").val(((ak * GETDOLTODAYBTC * arrgetusd) / GETSAT).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val(((ak * GETDOLTODAYLOCBTC * arrgetusd) / GETSAT).toFixed(2));
	$("#VESMNTDOLVZLA").val(((ak * GETMNTDOLVZLA * arrgetusd) / GETSAT).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / GETSAT).toFixed(8));
    $("#BOLI").val((ak * (GETBOLI / GETSAT)).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / GETSAT)).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / GETSAT)).toFixed(8));
    $("#ETH").val((ak * (GETETH / GETSAT)).toFixed(8));
    $("#BAT").val((ak * (GETBAT / GETSAT)).toFixed(8));
    $("#LTC").val((ak * (GETLTC / GETSAT)).toFixed(8));
    $("#XMR").val((ak * (GETXMR / GETSAT)).toFixed(8));
    $("#DASH").val((ak * (GETDASH / GETSAT)).toFixed(8));
    $("#ADA").val((ak * (GETADA / GETSAT)).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / GETSAT)).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / GETSAT)).toFixed(8));
    $("#BTT").val((ak * (GETBTT / GETSAT)).toFixed(8));
    $("#FIL").val((ak * (GETFIL / GETSAT)).toFixed(8));
    $("#LBC").val((ak * (GETLBC / GETSAT)).toFixed(8));
	$("#YFI").val((ak * (GETYFI / GETSAT)).toFixed(8));

$("#USD").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#EUR").val((ak * (arrgeteur / arrgetusd)).toFixed(2));
    $("#CAD").val((ak * (GETCAD / arrgetusd)).toFixed(2));
    $("#BRL").val((ak * (getbrl / arrgetusd)).toFixed(2));
    $("#COP").val((ak * (getcop / arrgetusd)).toFixed(2));
    $("#VESCMC").val((ak * (arrgetves / arrgetusd)).toFixed(2));
    $("#VESBITVEN").val((ak * bitvenref).toFixed(2));
    $("#ARS").val((ak * (GETARS / arrgetusd)).toFixed(2));
    $("#CLP").val((ak * (getclp / arrgetusd)).toFixed(2));
	$("#VESDOLTODAY").val((ak * GETDOLTODAY).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * GETDOLTODAYBTC).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * GETDOLTODAYLOCBTC).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * GETMNTDOLVZLA).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / arrgetusd).toFixed(8));
    $("#SAT").val(((ak / arrgetusd) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / arrgetusd)).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / arrgetusd)).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / arrgetusd)).toFixed(8));
    $("#ETH").val((ak * (GETETH / arrgetusd)).toFixed(8));
    $("#BAT").val((ak * (GETBAT / arrgetusd)).toFixed(8));
    $("#LTC").val((ak * (GETLTC / arrgetusd)).toFixed(8));
    $("#XMR").val((ak * (GETXMR / arrgetusd)).toFixed(8));
    $("#DASH").val((ak * (GETDASH / arrgetusd)).toFixed(8));
    $("#ADA").val((ak * (GETADA / arrgetusd)).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / arrgetusd)).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / arrgetusd)).toFixed(8));
    $("#BTT").val((ak * (GETBTT / arrgetusd)).toFixed(8));
    $("#FIL").val((ak * (GETFIL / arrgetusd)).toFixed(8));
    $("#LBC").val((ak * (GETLBC / arrgetusd)).toFixed(8));
	$("#YFI").val((ak * (GETYFI / arrgetusd)).toFixed(8));

});

$("#BTC").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd)).toFixed(2));
    $("#EUR").val((ak * (arrgeteur)).toFixed(2));
    $("#CAD").val((ak * (GETCAD)).toFixed(2));
    $("#BRL").val((ak * (getbrl)).toFixed(2));
    $("#COP").val((ak * (getcop)).toFixed(2));
    $("#VESCMC").val((ak * (arrgetves)).toFixed(2));
    $("#VESBITVEN").val((ak * bitvenref * arrgetusd).toFixed(2));
    $("#ARS").val((ak * (GETARS)).toFixed(2));
    $("#CLP").val((ak * (getclp)).toFixed(2));
	$("#VESDOLTODAY").val((ak * GETDOLTODAY * arrgetusd).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * GETDOLTODAYBTC * arrgetusd).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * GETDOLTODAYLOCBTC * arrgetusd).toFixed(2));
	//VESMNTDOLVZLA GETMNTDOLVZLA
	$("#VESMNTDOLVZLA").val((ak * GETMNTDOLVZLA * arrgetusd).toFixed(2));

    /*eCoins:*/
    $("#SAT").val(((ak) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI)).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA)).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE)).toFixed(8));
    $("#ETH").val((ak * (GETETH)).toFixed(8));
    $("#BAT").val((ak * (GETBAT)).toFixed(8));
    $("#LTC").val((ak * (GETLTC)).toFixed(8));
    $("#XMR").val((ak * (GETXMR)).toFixed(8));
    $("#DASH").val((ak * (GETDASH)).toFixed(8));
    $("#ADA").val((ak * (GETADA)).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX)).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM)).toFixed(8));
    $("#BTT").val((ak * (GETBTT)).toFixed(8));
    $("#FIL").val((ak * (GETFIL)).toFixed(8));
    $("#LBC").val((ak * (GETLBC)).toFixed(8));
	$("#YFI").val((ak * (GETYFI)).toFixed(8));

});

$("#SAT").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / GETSAT)).toFixed(8));
    $("#EUR").val((ak * (arrgeteur / GETSAT)).toFixed(8));
    $("#CAD").val((ak * (GETCAD / GETSAT)).toFixed(8));
    $("#BRL").val((ak * (getbrl / GETSAT)).toFixed(8));
    $("#COP").val((ak * (getcop / GETSAT)).toFixed(2));
    $("#VESCMC").val((ak * (arrgetves / GETSAT)).toFixed(2));
    $("#VESBITVEN").val(((ak * bitvenref * arrgetusd) / GETSAT).toFixed(2));
    $("#ARS").val((ak * (GETARS / GETSAT)).toFixed(8));
    $("#CLP").val((ak * (getclp / GETSAT)).toFixed(8));
	$("#VESDOLTODAY").val(((ak * GETDOLTODAY  * arrgetusd) / GETSAT).toFixed(2));
	$("#VESDOLTODAYBTC").val(((ak * GETDOLTODAYBTC * arrgetusd) / GETSAT).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val(((ak * GETDOLTODAYLOCBTC * arrgetusd) / GETSAT).toFixed(2));
	$("#VESMNTDOLVZLA").val(((ak * GETMNTDOLVZLA * arrgetusd) / GETSAT).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / GETSAT).toFixed(8));
    $("#BOLI").val((ak * (GETBOLI / GETSAT)).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / GETSAT)).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / GETSAT)).toFixed(8));
    $("#ETH").val((ak * (GETETH / GETSAT)).toFixed(8));
    $("#BAT").val((ak * (GETBAT / GETSAT)).toFixed(8));
    $("#LTC").val((ak * (GETLTC / GETSAT)).toFixed(8));
    $("#XMR").val((ak * (GETXMR / GETSAT)).toFixed(8));
    $("#DASH").val((ak * (GETDASH / GETSAT)).toFixed(8));
    $("#ADA").val((ak * (GETADA / GETSAT)).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / GETSAT)).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / GETSAT)).toFixed(8));
    $("#BTT").val((ak * (GETBTT / GETSAT)).toFixed(8));
    $("#FIL").val((ak * (GETFIL / GETSAT)).toFixed(8));
    $("#LBC").val((ak * (GETLBC / GETSAT)).toFixed(8));
	$("#YFI").val((ak * (GETYFI / GETSAT)).toFixed(8));

});

$("#EUR").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / arrgeteur)).toFixed(2));
    $("#CAD").val((ak * (GETCAD / arrgeteur)).toFixed(2));
    $("#BRL").val((ak * (getbrl / arrgeteur)).toFixed(2));
    $("#COP").val((ak * (getcop / arrgeteur)).toFixed(2));
    $("#VESCMC").val((ak * (arrgetves / arrgeteur)).toFixed(2));
    $("#VESBITVEN").val((ak * ((bitvenref * (arrgetusd / arrgeteur)))).toFixed(2));
    $("#ARS").val((ak * (GETARS / arrgeteur)).toFixed(2));
    $("#CLP").val((ak * (getclp / arrgeteur)).toFixed(2));
	$("#VESDOLTODAY").val((ak * (dolartoday.EUR.dolartoday)).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * ((GETDOLTODAYBTC * (arrgetusd / arrgeteur)))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * ((GETDOLTODAYLOCBTC * (arrgetusd / arrgeteur)))).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * ((GETMNTDOLVZLA * (arrgetusd / arrgeteur)))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / arrgeteur).toFixed(8));
    $("#SAT").val(((ak / arrgeteur) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / arrgeteur)).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / arrgeteur)).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / arrgeteur)).toFixed(8));
    $("#ETH").val((ak * (GETETH / arrgeteur)).toFixed(8));
    $("#BAT").val((ak * (GETBAT / arrgeteur)).toFixed(8));
    $("#LTC").val((ak * (GETLTC / arrgeteur)).toFixed(8));
    $("#XMR").val((ak * (GETXMR / arrgeteur)).toFixed(8));
    $("#DASH").val((ak * (GETDASH / arrgeteur)).toFixed(8));
    $("#ADA").val((ak * (GETADA / arrgeteur)).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / arrgeteur)).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / arrgeteur)).toFixed(8));
    $("#BTT").val((ak * (GETBTT / arrgeteur)).toFixed(8));
    $("#FIL").val((ak * (GETFIL / arrgeteur)).toFixed(8));
    $("#LBC").val((ak * (GETLBC / arrgeteur)).toFixed(8));
	$("#YFI").val((ak * (GETYFI / arrgeteur)).toFixed(8));

});

$("#CAD").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / GETCAD)).toFixed(2));
    $("#EUR").val((ak * (arrgeteur / GETCAD)).toFixed(2));
    $("#BRL").val((ak * (getbrl / GETCAD)).toFixed(2));
    $("#COP").val((ak * (getcop / GETCAD)).toFixed(2));
    $("#VESCMC").val((ak * (arrgetves / GETCAD)).toFixed(2));
    $("#VESBITVEN").val((ak * ((bitvenref * (arrgetusd / GETCAD)))).toFixed(2));
    $("#ARS").val((ak * (GETARS / GETCAD)).toFixed(2));
    $("#CLP").val((ak * (getclp / GETCAD)).toFixed(2));
	$("#VESDOLTODAY").val((ak * ((GETDOLTODAY * (arrgetusd / arrgeteur)))).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * ((GETDOLTODAYBTC * (arrgetusd / arrgeteur)))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * ((GETDOLTODAYLOCBTC * (arrgetusd / arrgeteur)))).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * ((GETMNTDOLVZLA * (arrgetusd / arrgeteur)))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / GETCAD).toFixed(8));
    $("#SAT").val(((ak / GETCAD) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / GETCAD)).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / GETCAD)).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / GETCAD)).toFixed(8));
    $("#ETH").val((ak * (GETETH / GETCAD)).toFixed(8));
    $("#BAT").val((ak * (GETBAT / GETCAD)).toFixed(8));
    $("#LTC").val((ak * (GETLTC / GETCAD)).toFixed(8));
    $("#XMR").val((ak * (GETXMR / GETCAD)).toFixed(8));
    $("#DASH").val((ak * (GETDASH / GETCAD)).toFixed(8));
    $("#ADA").val((ak * (GETADA / GETCAD)).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / GETCAD)).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / GETCAD)).toFixed(8));
    $("#BTT").val((ak * (GETBTT / GETCAD)).toFixed(8));
    $("#FIL").val((ak * (GETFIL / GETCAD)).toFixed(8));
    $("#LBC").val((ak * (GETLBC / GETCAD)).toFixed(8));
	$("#YFI").val((ak * (GETYFI / GETCAD)).toFixed(8));

});

$("#BRL").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / getbrl)).toFixed(2));
    $("#EUR").val((ak * (arrgeteur / getbrl)).toFixed(2));
    $("#CAD").val((ak * (GETCAD / getbrl)).toFixed(2));
    $("#COP").val((ak * (getcop / getbrl)).toFixed(2));
    $("#VESCMC").val((ak * (arrgetves / getbrl)).toFixed(2));
    $("#VESBITVEN").val((ak * ((bitvenref * (arrgetusd / getbrl)))).toFixed(2));
    $("#ARS").val((ak * (GETARS / getbrl)).toFixed(2));
    $("#CLP").val((ak * (getclp / getbrl)).toFixed(2));
	$("#VESDOLTODAY").val((ak * ((GETDOLTODAY * (arrgetusd / getbrl)))).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * ((GETDOLTODAYBTC * (arrgetusd / getbrl)))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * ((GETDOLTODAYLOCBTC * (arrgetusd / getbrl)))).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * ((GETMNTDOLVZLA * (arrgetusd / getbrl)))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / getbrl).toFixed(8));
    $("#SAT").val(((ak / getbrl) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / getbrl)).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / getbrl)).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / getbrl)).toFixed(8));
    $("#ETH").val((ak * (GETETH / getbrl)).toFixed(8));
    $("#BAT").val((ak * (GETBAT / getbrl)).toFixed(8));
    $("#LTC").val((ak * (GETLTC / getbrl)).toFixed(8));
    $("#XMR").val((ak * (GETXMR / getbrl)).toFixed(8));
    $("#DASH").val((ak * (GETDASH / getbrl)).toFixed(8));
    $("#ADA").val((ak * (GETADA / getbrl)).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / getbrl)).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / getbrl)).toFixed(8));
    $("#BTT").val((ak * (GETBTT / getbrl)).toFixed(8));
    $("#FIL").val((ak * (GETFIL / getbrl)).toFixed(8));
    $("#LBC").val((ak * (GETLBC / getbrl)).toFixed(8));
	$("#YFI").val((ak * (GETYFI / getbrl)).toFixed(8));

});

$("#COP").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / getcop)).toFixed(2));
    $("#EUR").val((ak * (arrgeteur / getcop)).toFixed(2));
    $("#BRL").val((ak * (getbrl / getcop)).toFixed(2));
    $("#CAD").val((ak * (GETCAD / getcop)).toFixed(2));
    $("#VESCMC").val((ak * (arrgetves / getcop)).toFixed(2));
    $("#VESBITVEN").val((ak * ((bitvenref * (arrgetusd / getcop)))).toFixed(2));
    $("#ARS").val((ak * (GETARS / getcop)).toFixed(2));
    $("#CLP").val((ak * (getclp / getcop)).toFixed(2));
	$("#VESDOLTODAY").val((ak * ((GETDOLTODAY * (arrgetusd / getcop)))).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * ((GETDOLTODAYBTC * (arrgetusd / getcop)))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * ((GETDOLTODAYLOCBTC * (arrgetusd / getcop)))).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * ((GETMNTDOLVZLA * (arrgetusd / getcop)))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / getcop).toFixed(8));
    $("#SAT").val(((ak / getcop) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / getcop)).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / getcop)).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / getcop)).toFixed(8));
    $("#ETH").val((ak * (GETETH / getcop)).toFixed(8));
    $("#BAT").val((ak * (GETBAT / getcop)).toFixed(8));
    $("#LTC").val((ak * (GETLTC / getcop)).toFixed(8));
    $("#XMR").val((ak * (GETXMR / getcop)).toFixed(8));
    $("#DASH").val((ak * (GETDASH / getcop)).toFixed(8));
    $("#ADA").val((ak * (GETADA / getcop)).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / getcop)).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / getcop)).toFixed(8));
    $("#BTT").val((ak * (GETBTT / getcop)).toFixed(8));
    $("#FIL").val((ak * (GETFIL / getcop)).toFixed(8));
    $("#LBC").val((ak * (GETLBC / getcop)).toFixed(8));
	$("#YFI").val((ak * (GETYFI / getcop)).toFixed(8));

});

$("#ARS").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / GETARS)).toFixed(2));
    $("#EUR").val((ak * (arrgeteur / GETARS)).toFixed(2));
    $("#BRL").val((ak * (getbrl / GETARS)).toFixed(2));
    $("#COP").val((ak * (getcop / GETARS)).toFixed(2));
    $("#VESCMC").val((ak * (arrgetves / GETARS)).toFixed(2));
    $("#VESBITVEN").val((ak * ((bitvenref * (arrgetusd / GETARS)))).toFixed(2));
    $("#CAD").val((ak * (GETCAD / GETARS)).toFixed(2));
    $("#CLP").val((ak * (getclp / GETARS)).toFixed(2));
	$("#VESDOLTODAY").val((ak * ((GETDOLTODAY * (arrgetusd / GETARS)))).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * ((GETDOLTODAYBTC * (arrgetusd / GETARS)))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * ((GETDOLTODAYLOCBTC * (arrgetusd / GETARS)))).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * ((GETMNTDOLVZLA * (arrgetusd / GETARS)))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / GETARS).toFixed(8));
    $("#SAT").val(((ak / GETARS) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / GETARS)).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / GETARS)).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / GETARS)).toFixed(8));
    $("#ETH").val((ak * (GETETH / GETARS)).toFixed(8));
    $("#BAT").val((ak * (GETBAT / GETARS)).toFixed(8));
    $("#LTC").val((ak * (GETLTC / GETARS)).toFixed(8));
    $("#XMR").val((ak * (GETXMR / GETARS)).toFixed(8));
    $("#DASH").val((ak * (GETDASH / GETARS)).toFixed(8));
    $("#ADA").val((ak * (GETADA / GETARS)).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / GETARS)).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / GETARS)).toFixed(8));
    $("#BTT").val((ak * (GETBTT / GETARS)).toFixed(8));
    $("#FIL").val((ak * (GETFIL / GETARS)).toFixed(8));
    $("#LBC").val((ak * (GETLBC / GETARS)).toFixed(8));
	$("#YFI").val((ak * (GETYFI / GETARS)).toFixed(8));

});

$("#CLP").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / getclp)).toFixed(2));
    $("#EUR").val((ak * (arrgeteur / getclp)).toFixed(2));
    $("#BRL").val((ak * (getbrl / getclp)).toFixed(2));
    $("#COP").val((ak * (getcop / getclp)).toFixed(2));
    $("#VESCMC").val((ak * (arrgetves / getclp)).toFixed(2));
    $("#VESBITVEN").val((ak * ((bitvenref * (arrgetusd / getclp)))).toFixed(2));
    $("#ARS").val((ak * (GETARS / getclp)).toFixed(2));
    $("#CAD").val((ak * (GETCAD / getclp)).toFixed(2));
	$("#VESDOLTODAY").val((ak * ((GETDOLTODAY * (arrgetusd / getclp)))).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * ((GETDOLTODAYBTC * (arrgetusd / getclp)))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * ((GETDOLTODAYLOCBTC * (arrgetusd / getclp)))).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * ((GETMNTDOLVZLA * (arrgetusd / getclp)))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / getclp).toFixed(8));
    $("#SAT").val(((ak / getclp) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / getclp)).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / getclp)).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / getclp)).toFixed(8));
    $("#ETH").val((ak * (GETETH / getclp)).toFixed(8));
    $("#BAT").val((ak * (GETBAT / getclp)).toFixed(8));
    $("#LTC").val((ak * (GETLTC / getclp)).toFixed(8));
    $("#XMR").val((ak * (GETXMR / getclp)).toFixed(8));
    $("#DASH").val((ak * (GETDASH / getclp)).toFixed(8));
    $("#ADA").val((ak * (GETADA / getclp)).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / getclp)).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / getclp)).toFixed(8));
    $("#BTT").val((ak * (GETBTT / getclp)).toFixed(8));
    $("#FIL").val((ak * (GETFIL / getclp)).toFixed(8));
    $("#LBC").val((ak * (GETLBC / getclp)).toFixed(8));
	$("#YFI").val((ak * (GETYFI / getclp)).toFixed(8));

});

$("#BOLI").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / GETBOLI)).toFixed(5));
    $("#EUR").val((ak * (arrgeteur / GETBOLI)).toFixed(5));
    $("#BRL").val((ak * (getbrl / GETBOLI)).toFixed(5));
    $("#COP").val((ak * (getcop / GETBOLI)).toFixed(5));
    $("#VESCMC").val((ak * (arrgetves / GETBOLI)).toFixed(2));
    $("#VESBITVEN").val((ak * ((bitvenref * (arrgetusd / GETBOLI)))).toFixed(2));
    $("#ARS").val((ak * (GETARS / GETBOLI)).toFixed(5));
    $("#CAD").val((ak * (GETCAD / GETBOLI)).toFixed(5));
    $("#CLP").val((ak * (getclp / GETBOLI)).toFixed(5));
	$("#VESDOLTODAY").val((ak * ((GETDOLTODAY * (arrgetusd / GETBOLI)))).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * ((GETDOLTODAYBTC * (arrgetusd / GETBOLI)))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * ((GETDOLTODAYLOCBTC * (arrgetusd / GETBOLI)))).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * ((GETMNTDOLVZLA * (arrgetusd / GETBOLI)))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / GETBOLI).toFixed(8));
    $("#SAT").val(((ak / GETBOLI) * GETSAT).toFixed(2));
    $("#AREPA").val((ak * (GETAREPA / GETBOLI)).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / GETBOLI)).toFixed(8));
    $("#ETH").val((ak * (GETETH / GETBOLI)).toFixed(8));
    $("#BAT").val((ak * (GETBAT / GETBOLI)).toFixed(8));
    $("#LTC").val((ak * (GETLTC / GETBOLI)).toFixed(8));
    $("#XMR").val((ak * (GETXMR / GETBOLI)).toFixed(8));
    $("#DASH").val((ak * (GETDASH / GETBOLI)).toFixed(8));
    $("#ADA").val((ak * (GETADA / GETBOLI)).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / GETBOLI)).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / GETBOLI)).toFixed(8));
    $("#BTT").val((ak * (GETBTT / GETBOLI)).toFixed(8));
    $("#FIL").val((ak * (GETFIL / GETBOLI)).toFixed(8));
    $("#LBC").val((ak * (GETLBC / GETBOLI)).toFixed(8));
	$("#YFI").val((ak * (GETYFI / GETBOLI)).toFixed(8));

});

$("#AREPA").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / GETAREPA)).toFixed(5));
    $("#EUR").val((ak * (arrgeteur / GETAREPA)).toFixed(5));
    $("#BRL").val((ak * (getbrl / GETAREPA)).toFixed(5));
    $("#COP").val((ak * (getcop / GETAREPA)).toFixed(5));
    $("#VESCMC").val((ak * (arrgetves / GETAREPA)).toFixed(2));
    $("#VESBITVEN").val((ak * ((bitvenref * (arrgetusd / GETAREPA)))).toFixed(2));
    $("#ARS").val((ak * (GETARS / GETAREPA)).toFixed(5));
    $("#CAD").val((ak * (GETCAD / GETAREPA)).toFixed(5));
    $("#CLP").val((ak * (getclp / GETAREPA)).toFixed(5));
	$("#VESDOLTODAY").val((ak * ((GETDOLTODAY * (arrgetusd / GETAREPA)))).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * ((GETDOLTODAYBTC * (arrgetusd / GETAREPA)))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * ((GETDOLTODAYLOCBTC * (arrgetusd / GETAREPA)))).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * ((GETMNTDOLVZLA * (arrgetusd / GETAREPA)))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / GETAREPA).toFixed(8));
    $("#SAT").val(((ak / GETAREPA) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / GETAREPA)).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / GETAREPA)).toFixed(8));
    $("#ETH").val((ak * (GETETH / GETAREPA)).toFixed(8));
    $("#BAT").val((ak * (GETBAT / GETAREPA)).toFixed(8));
    $("#LTC").val((ak * (GETLTC / GETAREPA)).toFixed(8));
    $("#XMR").val((ak * (GETXMR / GETAREPA)).toFixed(8));
    $("#DASH").val((ak * (GETDASH / GETAREPA)).toFixed(8));
    $("#ADA").val((ak * (GETADA / GETAREPA)).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / GETAREPA)).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / GETAREPA)).toFixed(8));
    $("#BTT").val((ak * (GETBTT / GETAREPA)).toFixed(8));
    $("#FIL").val((ak * (GETFIL / GETAREPA)).toFixed(8));
    $("#LBC").val((ak * (GETLBC / GETAREPA)).toFixed(8));
	$("#YFI").val((ak * (GETYFI / GETAREPA)).toFixed(8));

});

$("#DOGE").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / GETDOGE)).toFixed(5));
    $("#EUR").val((ak * (arrgeteur / GETDOGE)).toFixed(5));
    $("#BRL").val((ak * (getbrl / GETDOGE)).toFixed(5));
    $("#COP").val((ak * (getcop / GETDOGE)).toFixed(5));
    $("#VESCMC").val((ak * (arrgetves / GETDOGE)).toFixed(2));
    $("#VESBITVEN").val((ak * ((bitvenref * (arrgetusd / GETDOGE)))).toFixed(2));
    $("#ARS").val((ak * (GETARS / GETDOGE)).toFixed(5));
    $("#CAD").val((ak * (GETCAD / GETDOGE)).toFixed(5));
    $("#CLP").val((ak * (getclp / GETDOGE)).toFixed(5));
	$("#VESDOLTODAY").val((ak * ((GETDOLTODAY * (arrgetusd / GETDOGE)))).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * ((GETDOLTODAYBTC * (arrgetusd / GETDOGE)))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * ((GETDOLTODAYLOCBTC * (arrgetusd / GETDOGE)))).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * ((GETMNTDOLVZLA * (arrgetusd / GETDOGE)))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / GETDOGE).toFixed(8));
    $("#SAT").val(((ak / GETDOGE) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / GETDOGE)).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / GETDOGE)).toFixed(8));
    $("#ETH").val((ak * (GETETH / GETDOGE)).toFixed(8));
    $("#BAT").val((ak * (GETBAT / GETDOGE)).toFixed(8));
    $("#LTC").val((ak * (GETLTC / GETDOGE)).toFixed(8));
    $("#XMR").val((ak * (GETXMR / GETDOGE)).toFixed(8));
    $("#DASH").val((ak * (GETDASH / GETDOGE)).toFixed(8));
    $("#ADA").val((ak * (GETADA / GETDOGE)).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / GETDOGE)).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / GETDOGE)).toFixed(8));
    $("#BTT").val((ak * (GETBTT / GETDOGE)).toFixed(8));
    $("#FIL").val((ak * (GETFIL / GETDOGE)).toFixed(8));
    $("#LBC").val((ak * (GETLBC / GETDOGE)).toFixed(8));
	$("#YFI").val((ak * (GETYFI / GETDOGE)).toFixed(8));

});

$("#ETH").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / GETETH)).toFixed(5));
    $("#EUR").val((ak * (arrgeteur / GETETH)).toFixed(5));
    $("#BRL").val((ak * (getbrl / GETETH)).toFixed(5));
    $("#COP").val((ak * (getcop / GETETH)).toFixed(5));
    $("#VESCMC").val((ak * (arrgetves / GETETH)).toFixed(2));
    $("#VESBITVEN").val((ak * ((bitvenref * (arrgetusd / GETETH)))).toFixed(2));
    $("#ARS").val((ak * (GETARS / GETETH)).toFixed(5));
    $("#CAD").val((ak * (GETCAD / GETETH)).toFixed(5));
    $("#CLP").val((ak * (getclp / GETETH)).toFixed(5));
	$("#VESDOLTODAY").val((ak * ((GETDOLTODAY * (arrgetusd / GETETH)))).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * ((GETDOLTODAYBTC * (arrgetusd / GETETH)))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * ((GETDOLTODAYLOCBTC * (arrgetusd / GETETH)))).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * ((GETMNTDOLVZLA * (arrgetusd / GETETH)))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / GETETH).toFixed(8));
    $("#SAT").val(((ak / GETETH) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / GETETH)).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / GETETH)).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / GETETH)).toFixed(8));
    $("#BAT").val((ak * (GETBAT / GETETH)).toFixed(8));
    $("#LTC").val((ak * (GETLTC / GETETH)).toFixed(8));
    $("#XMR").val((ak * (GETXMR / GETETH)).toFixed(8));
    $("#DASH").val((ak * (GETDASH / GETETH)).toFixed(8));
    $("#ADA").val((ak * (GETADA / GETETH)).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / GETETH)).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / GETETH)).toFixed(8));
    $("#BTT").val((ak * (GETBTT / GETETH)).toFixed(8));
    $("#FIL").val((ak * (GETFIL / GETETH)).toFixed(8));
    $("#LBC").val((ak * (GETLBC / GETETH)).toFixed(8));
	$("#YFI").val((ak * (GETYFI / GETETH)).toFixed(8));

});

$("#BAT").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / GETBAT)).toFixed(5));
    $("#EUR").val((ak * (arrgeteur / GETBAT)).toFixed(5));
    $("#BRL").val((ak * (getbrl / GETBAT)).toFixed(5));
    $("#COP").val((ak * (getcop / GETBAT)).toFixed(5));
    $("#VESCMC").val((ak * (arrgetves / GETBAT)).toFixed(2));
    $("#VESBITVEN").val((ak * ((bitvenref * (arrgetusd / GETBAT)))).toFixed(2));
    $("#ARS").val((ak * (GETARS / GETBAT)).toFixed(5));
    $("#CAD").val((ak * (GETCAD / GETBAT)).toFixed(5));
    $("#CLP").val((ak * (getclp / GETBAT)).toFixed(5));
	$("#VESDOLTODAY").val((ak * ((GETDOLTODAY * (arrgetusd / GETBAT)))).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * ((GETDOLTODAYBTC * (arrgetusd / GETBAT)))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * ((GETDOLTODAYLOCBTC * (arrgetusd / GETBAT)))).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * ((GETMNTDOLVZLA * (arrgetusd / GETBAT)))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / GETBAT).toFixed(8));
    $("#SAT").val(((ak / GETBAT) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / GETBAT)).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / GETBAT)).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / GETBAT)).toFixed(8));
    $("#ETH").val((ak * (GETETH / GETBAT)).toFixed(8));
    $("#LTC").val((ak * (GETLTC / GETBAT)).toFixed(8));
    $("#XMR").val((ak * (GETXMR / GETBAT)).toFixed(8));
    $("#DASH").val((ak * (GETDASH / GETBAT)).toFixed(8));
    $("#ADA").val((ak * (GETADA / GETBAT)).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / GETBAT)).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / GETBAT)).toFixed(8));
    $("#BTT").val((ak * (GETBTT / GETBAT)).toFixed(8));
    $("#FIL").val((ak * (GETFIL / GETBAT)).toFixed(8));
    $("#LBC").val((ak * (GETLBC / GETBAT)).toFixed(8));
	$("#YFI").val((ak * (GETYFI / GETBAT)).toFixed(8));

});

$("#LTC").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / GETLTC)).toFixed(5));
    $("#EUR").val((ak * (arrgeteur / GETLTC)).toFixed(5));
    $("#BRL").val((ak * (getbrl / GETLTC)).toFixed(5));
    $("#COP").val((ak * (getcop / GETLTC)).toFixed(5));
    $("#VESCMC").val((ak * (arrgetves / GETLTC)).toFixed(2));
    $("#VESBITVEN").val((ak * ((bitvenref * (arrgetusd / GETLTC)))).toFixed(2));
    $("#ARS").val((ak * (GETARS / GETLTC)).toFixed(5));
    $("#CAD").val((ak * (GETCAD / GETLTC)).toFixed(5));
    $("#CLP").val((ak * (getclp / GETLTC)).toFixed(5));
	$("#VESDOLTODAY").val((ak * ((GETDOLTODAY * (arrgetusd / GETLTC)))).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * ((GETDOLTODAYBTC * (arrgetusd / GETLTC)))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * ((GETDOLTODAYLOCBTC * (arrgetusd / GETLTC)))).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * ((GETMNTDOLVZLA * (arrgetusd / GETLTC)))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / GETLTC).toFixed(8));
    $("#SAT").val(((ak / GETLTC) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / GETLTC)).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / GETLTC)).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / GETLTC)).toFixed(8));
    $("#ETH").val((ak * (GETETH / GETLTC)).toFixed(8));
    $("#BAT").val((ak * (GETBAT / GETLTC)).toFixed(8));
    $("#XMR").val((ak * (GETXMR / GETLTC)).toFixed(8));
    $("#DASH").val((ak * (GETDASH / GETLTC)).toFixed(8));
    $("#ADA").val((ak * (GETADA / GETLTC)).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / GETLTC)).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / GETLTC)).toFixed(8));
    $("#BTT").val((ak * (GETBTT / GETLTC)).toFixed(8));
    $("#FIL").val((ak * (GETFIL / GETLTC)).toFixed(8));
    $("#LBC").val((ak * (GETLBC / GETLTC)).toFixed(8));
	$("#YFI").val((ak * (GETYFI / GETLTC)).toFixed(8));

});

$("#XMR").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / GETXMR)).toFixed(5));
    $("#EUR").val((ak * (arrgeteur / GETXMR)).toFixed(5));
    $("#BRL").val((ak * (getbrl / GETXMR)).toFixed(5));
    $("#COP").val((ak * (getcop / GETXMR)).toFixed(5));
    $("#VESCMC").val((ak * (arrgetves / GETXMR)).toFixed(2));
    $("#VESBITVEN").val((ak * ((bitvenref * (arrgetusd / GETXMR)))).toFixed(2));
    $("#ARS").val((ak * (GETARS / GETXMR)).toFixed(5));
    $("#CAD").val((ak * (GETCAD / GETXMR)).toFixed(5));
    $("#CLP").val((ak * (getclp / GETXMR)).toFixed(5));
	$("#VESDOLTODAY").val((ak * ((GETDOLTODAY * (arrgetusd / GETXMR)))).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * ((GETDOLTODAYBTC * (arrgetusd / GETXMR)))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * ((GETDOLTODAYLOCBTC * (arrgetusd / GETXMR)))).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * ((GETMNTDOLVZLA * (arrgetusd / GETXMR)))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / GETXMR).toFixed(8));
    $("#SAT").val(((ak / GETXMR) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / GETXMR)).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / GETXMR)).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / GETXMR)).toFixed(8));
    $("#ETH").val((ak * (GETETH / GETXMR)).toFixed(8));
    $("#BAT").val((ak * (GETBAT / GETXMR)).toFixed(8));
    $("#LTC").val((ak * (GETLTC / GETXMR)).toFixed(8));
    $("#DASH").val((ak * (GETDASH / GETXMR)).toFixed(8));
    $("#ADA").val((ak * (GETADA / GETXMR)).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / GETXMR)).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / GETXMR)).toFixed(8));
    $("#BTT").val((ak * (GETBTT / GETXMR)).toFixed(8));
    $("#FIL").val((ak * (GETFIL / GETXMR)).toFixed(8));
    $("#LBC").val((ak * (GETLBC / GETXMR)).toFixed(8));
	$("#YFI").val((ak * (GETYFI / GETXMR)).toFixed(8));

});

$("#DASH").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / GETDASH)).toFixed(5));
    $("#EUR").val((ak * (arrgeteur / GETDASH)).toFixed(5));
    $("#BRL").val((ak * (getbrl / GETDASH)).toFixed(5));
    $("#COP").val((ak * (getcop / GETDASH)).toFixed(5));
    $("#VESCMC").val((ak * (arrgetves / GETDASH)).toFixed(2));
    $("#VESBITVEN").val((ak * ((bitvenref * (arrgetusd / GETDASH)))).toFixed(2));
    $("#ARS").val((ak * (GETARS / GETDASH)).toFixed(5));
    $("#CAD").val((ak * (GETCAD / GETDASH)).toFixed(5));
    $("#CLP").val((ak * (getclp / GETDASH)).toFixed(5));
	$("#VESDOLTODAY").val((ak * ((GETDOLTODAY * (arrgetusd / GETDASH)))).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * ((GETDOLTODAYBTC * (arrgetusd / GETDASH)))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * ((GETDOLTODAYLOCBTC * (arrgetusd / GETDASH)))).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * ((GETMNTDOLVZLA * (arrgetusd / GETDASH)))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / GETDASH).toFixed(8));
    $("#SAT").val(((ak / GETDASH) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / GETDASH)).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / GETDASH)).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / GETDASH)).toFixed(8));
    $("#ETH").val((ak * (GETETH / GETDASH)).toFixed(8));
    $("#BAT").val((ak * (GETBAT / GETDASH)).toFixed(8));
    $("#LTC").val((ak * (GETLTC / GETDASH)).toFixed(8));
    $("#XMR").val((ak * (GETXMR / GETDASH)).toFixed(8));
    $("#ADA").val((ak * (GETADA / GETDASH)).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / GETDASH)).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / GETDASH)).toFixed(8));
    $("#BTT").val((ak * (GETBTT / GETDASH)).toFixed(8));
    $("#FIL").val((ak * (GETFIL / GETDASH)).toFixed(8));
    $("#LBC").val((ak * (GETLBC / GETDASH)).toFixed(8));
	$("#YFI").val((ak * (GETYFI / GETDASH)).toFixed(8));

});

$("#ADA").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / GETADA)).toFixed(5));
    $("#EUR").val((ak * (arrgeteur / GETADA)).toFixed(5));
    $("#BRL").val((ak * (getbrl / GETADA)).toFixed(5));
    $("#COP").val((ak * (getcop / GETADA)).toFixed(5));
    $("#VESCMC").val((ak * (arrgetves / GETADA)).toFixed(2));
    $("#VESBITVEN").val((ak * ((bitvenref * (arrgetusd / GETADA)))).toFixed(2));
    $("#ARS").val((ak * (GETARS / GETADA)).toFixed(5));
    $("#CAD").val((ak * (GETCAD / GETADA)).toFixed(5));
    $("#CLP").val((ak * (getclp / GETADA)).toFixed(5));
	$("#VESDOLTODAY").val((ak * ((GETDOLTODAY * (arrgetusd / GETADA)))).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * ((GETDOLTODAYBTC * (arrgetusd / GETADA)))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * ((GETDOLTODAYLOCBTC * (arrgetusd / GETADA)))).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * ((GETMNTDOLVZLA * (arrgetusd / GETADA)))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / GETADA).toFixed(8));
    $("#SAT").val(((ak / GETADA) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / GETADA)).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / GETADA)).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / GETADA)).toFixed(8));
    $("#ETH").val((ak * (GETETH / GETADA)).toFixed(8));
    $("#BAT").val((ak * (GETBAT / GETADA)).toFixed(8));
    $("#LTC").val((ak * (GETLTC / GETADA)).toFixed(8));
    $("#XMR").val((ak * (GETXMR / GETADA)).toFixed(8));
    $("#DASH").val((ak * (GETDASH / GETADA)).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / GETADA)).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / GETADA)).toFixed(8));
    $("#BTT").val((ak * (GETBTT / GETADA)).toFixed(8));
    $("#FIL").val((ak * (GETFIL / GETADA)).toFixed(8));
    $("#LBC").val((ak * (GETLBC / GETADA)).toFixed(8));
	$("#YFI").val((ak * (GETYFI / GETADA)).toFixed(8));

});

$("#PIVX").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / GETPIVX)).toFixed(5));
    $("#EUR").val((ak * (arrgeteur / GETPIVX)).toFixed(5));
    $("#BRL").val((ak * (getbrl / GETPIVX)).toFixed(5));
    $("#COP").val((ak * (getcop / GETPIVX)).toFixed(5));
    $("#VESCMC").val((ak * (arrgetves / GETPIVX)).toFixed(2));
    $("#VESBITVEN").val((ak * ((bitvenref * (arrgetusd / GETPIVX)))).toFixed(2));
    $("#ARS").val((ak * (GETARS / GETPIVX)).toFixed(5));
    $("#CAD").val((ak * (GETCAD / GETPIVX)).toFixed(5));
    $("#CLP").val((ak * (getclp / GETPIVX)).toFixed(5));
	$("#VESDOLTODAY").val((ak * ((GETDOLTODAY * (arrgetusd / GETPIVX)))).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * ((GETDOLTODAYBTC * (arrgetusd / GETPIVX)))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * ((GETDOLTODAYLOCBTC * (arrgetusd / GETPIVX)))).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * ((GETMNTDOLVZLA * (arrgetusd / GETPIVX)))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / GETPIVX).toFixed(8));
    $("#SAT").val(((ak / GETPIVX) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / GETPIVX)).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / GETPIVX)).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / GETPIVX)).toFixed(8));
    $("#ETH").val((ak * (GETETH / GETPIVX)).toFixed(8));
    $("#BAT").val((ak * (GETBAT / GETPIVX)).toFixed(8));
    $("#LTC").val((ak * (GETLTC / GETPIVX)).toFixed(8));
    $("#XMR").val((ak * (GETXMR / GETPIVX)).toFixed(8));
    $("#DASH").val((ak * (GETDASH / GETPIVX)).toFixed(8));
    $("#ADA").val((ak * (GETADA / GETPIVX)).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / GETPIVX)).toFixed(8));
    $("#BTT").val((ak * (GETBTT / GETPIVX)).toFixed(8));
    $("#FIL").val((ak * (GETFIL / GETPIVX)).toFixed(8));
    $("#LBC").val((ak * (GETLBC / GETPIVX)).toFixed(8));
	$("#YFI").val((ak * (GETYFI / GETPIVX)).toFixed(8));

});

$("#STEEM").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / GETSTEEM)).toFixed(5));
    $("#EUR").val((ak * (arrgeteur / GETSTEEM)).toFixed(5));
    $("#BRL").val((ak * (getbrl / GETSTEEM)).toFixed(5));
    $("#COP").val((ak * (getcop / GETSTEEM)).toFixed(5));
    $("#VESCMC").val((ak * (arrgetves / GETSTEEM)).toFixed(2));
    $("#VESBITVEN").val((ak * ((bitvenref * (arrgetusd / GETSTEEM)))).toFixed(2));
    $("#ARS").val((ak * (GETARS / GETSTEEM)).toFixed(5));
    $("#CAD").val((ak * (GETCAD / GETSTEEM)).toFixed(5));
    $("#CLP").val((ak * (getclp / GETSTEEM)).toFixed(5));
	$("#VESDOLTODAY").val((ak * ((GETDOLTODAY * (arrgetusd / GETSTEEM)))).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * ((GETDOLTODAYBTC * (arrgetusd / GETSTEEM)))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * ((GETDOLTODAYLOCBTC * (arrgetusd / GETSTEEM)))).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * ((GETMNTDOLVZLA * (arrgetusd / GETSTEEM)))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / GETSTEEM).toFixed(8));
    $("#SAT").val(((ak / GETSTEEM) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / GETSTEEM)).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / GETSTEEM)).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / GETSTEEM)).toFixed(8));
    $("#ETH").val((ak * (GETETH / GETSTEEM)).toFixed(8));
    $("#BAT").val((ak * (GETBAT / GETSTEEM)).toFixed(8));
    $("#LTC").val((ak * (GETLTC / GETSTEEM)).toFixed(8));
    $("#XMR").val((ak * (GETXMR / GETSTEEM)).toFixed(8));
    $("#DASH").val((ak * (GETDASH / GETSTEEM)).toFixed(8));
    $("#ADA").val((ak * (GETADA / GETSTEEM)).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / GETSTEEM)).toFixed(8));
    $("#BTT").val((ak * (GETBTT / GETSTEEM)).toFixed(8));
    $("#FIL").val((ak * (GETFIL / GETSTEEM)).toFixed(8));
    $("#LBC").val((ak * (GETLBC / GETSTEEM)).toFixed(8));
	$("#YFI").val((ak * (GETYFI / GETSTEEM)).toFixed(8));

});

$("#BTT").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / GETBTT)).toFixed(5));
    $("#EUR").val((ak * (arrgeteur / GETBTT)).toFixed(5));
    $("#BRL").val((ak * (getbrl / GETBTT)).toFixed(5));
    $("#COP").val((ak * (getcop / GETBTT)).toFixed(5));
    $("#VESCMC").val((ak * (arrgetves / GETBTT)).toFixed(2));
    $("#VESBITVEN").val((ak * ((bitvenref * (arrgetusd / GETBTT)))).toFixed(2));
    $("#ARS").val((ak * (GETARS / GETBTT)).toFixed(5));
    $("#CAD").val((ak * (GETCAD / GETBTT)).toFixed(5));
    $("#CLP").val((ak * (getclp / GETBTT)).toFixed(5));
	$("#VESDOLTODAY").val((ak * ((GETDOLTODAY * (arrgetusd / GETBTT)))).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * ((GETDOLTODAYBTC * (arrgetusd / GETBTT)))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * ((GETDOLTODAYLOCBTC * (arrgetusd / GETBTT)))).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * ((GETMNTDOLVZLA * (arrgetusd / GETBTT)))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / GETBTT).toFixed(8));
    $("#SAT").val(((ak / GETBTT) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / GETBTT)).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / GETBTT)).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / GETBTT)).toFixed(8));
    $("#ETH").val((ak * (GETETH / GETBTT)).toFixed(8));
    $("#BAT").val((ak * (GETBAT / GETBTT)).toFixed(8));
    $("#LTC").val((ak * (GETLTC / GETBTT)).toFixed(8));
    $("#XMR").val((ak * (GETXMR / GETBTT)).toFixed(8));
    $("#DASH").val((ak * (GETDASH / GETBTT)).toFixed(8));
    $("#ADA").val((ak * (GETADA / GETBTT)).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / GETBTT)).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / GETBTT)).toFixed(8));
    $("#FIL").val((ak * (GETFIL / GETBTT)).toFixed(8));
    $("#LBC").val((ak * (GETLBC / GETBTT)).toFixed(8));
	$("#YFI").val((ak * (GETYFI / GETBTT)).toFixed(8));

});

$("#FIL").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / GETFIL)).toFixed(5));
    $("#EUR").val((ak * (arrgeteur / GETFIL)).toFixed(5));
    $("#BRL").val((ak * (getbrl / GETFIL)).toFixed(5));
    $("#COP").val((ak * (getcop / GETFIL)).toFixed(5));
    $("#VESCMC").val((ak * (arrgetves / GETFIL)).toFixed(2));
    $("#VESBITVEN").val((ak * ((bitvenref * (arrgetusd / GETFIL)))).toFixed(2));
    $("#ARS").val((ak * (GETARS / GETFIL)).toFixed(5));
    $("#CAD").val((ak * (GETCAD / GETFIL)).toFixed(5));
    $("#CLP").val((ak * (getclp / GETFIL)).toFixed(5));
	$("#VESDOLTODAY").val((ak * ((GETDOLTODAY * (arrgetusd / GETFIL)))).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * ((GETDOLTODAYBTC * (arrgetusd / GETFIL)))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * ((GETDOLTODAYLOCBTC * (arrgetusd / GETFIL)))).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * ((GETMNTDOLVZLA * (arrgetusd / GETFIL)))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / GETFIL).toFixed(8));
    $("#SAT").val(((ak / GETFIL) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / GETFIL)).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / GETFIL)).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / GETFIL)).toFixed(8));
    $("#ETH").val((ak * (GETETH / GETFIL)).toFixed(8));
    $("#BAT").val((ak * (GETBAT / GETFIL)).toFixed(8));
    $("#LTC").val((ak * (GETLTC / GETFIL)).toFixed(8));
    $("#XMR").val((ak * (GETXMR / GETFIL)).toFixed(8));
    $("#DASH").val((ak * (GETDASH / GETFIL)).toFixed(8));
    $("#ADA").val((ak * (GETADA / GETFIL)).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / GETFIL)).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / GETFIL)).toFixed(8));
    $("#BTT").val((ak * (GETBTT / GETFIL)).toFixed(8));
    $("#LBC").val((ak * (GETLBC / GETFIL)).toFixed(8));
	$("#YFI").val((ak * (GETYFI / GETFIL)).toFixed(8));

});

$("#LBC").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / GETLBC)).toFixed(5));
    $("#EUR").val((ak * (arrgeteur / GETLBC)).toFixed(5));
    $("#BRL").val((ak * (getbrl / GETLBC)).toFixed(5));
    $("#COP").val((ak * (getcop / GETLBC)).toFixed(5));
    $("#VESCMC").val((ak * (arrgetves / GETLBC)).toFixed(2));
    $("#VESBITVEN").val((ak * ((bitvenref * (arrgetusd / GETLBC)))).toFixed(2));
    $("#ARS").val((ak * (GETARS / GETLBC)).toFixed(5));
    $("#CAD").val((ak * (GETCAD / GETLBC)).toFixed(5));
    $("#CLP").val((ak * (getclp / GETLBC)).toFixed(5));
	$("#VESDOLTODAY").val((ak * ((GETDOLTODAY * (arrgetusd / GETLBC)))).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * ((GETDOLTODAYBTC * (arrgetusd / GETLBC)))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * ((GETDOLTODAYLOCBTC * (arrgetusd / GETLBC)))).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * ((GETMNTDOLVZLA * (arrgetusd / GETLBC)))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / GETLBC).toFixed(8));
    $("#SAT").val(((ak / GETLBC) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / GETLBC)).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / GETLBC)).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / GETLBC)).toFixed(8));
    $("#ETH").val((ak * (GETETH / GETLBC)).toFixed(8));
    $("#BAT").val((ak * (GETBAT / GETLBC)).toFixed(8));
    $("#LTC").val((ak * (GETLTC / GETLBC)).toFixed(8));
    $("#XMR").val((ak * (GETXMR / GETLBC)).toFixed(8));
    $("#DASH").val((ak * (GETDASH / GETLBC)).toFixed(8));
    $("#ADA").val((ak * (GETADA / GETLBC)).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / GETLBC)).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / GETLBC)).toFixed(8));
    $("#BTT").val((ak * (GETBTT / GETLBC)).toFixed(8));
    $("#FIL").val((ak * (GETFIL / GETLBC)).toFixed(8));
	$("#YFI").val((ak * (GETYFI / GETLBC)).toFixed(8));

});

$("#YFI").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / GETYFI)).toFixed(5));
    $("#EUR").val((ak * (arrgeteur / GETYFI)).toFixed(5));
    $("#BRL").val((ak * (getbrl / GETYFI)).toFixed(5));
    $("#COP").val((ak * (getcop / GETYFI)).toFixed(5));
    $("#VESCMC").val((ak * (arrgetves / GETYFI)).toFixed(2));
    $("#VESBITVEN").val((ak * ((bitvenref * (arrgetusd / GETYFI)))).toFixed(2));
    $("#ARS").val((ak * (GETARS / GETYFI)).toFixed(5));
    $("#CAD").val((ak * (GETCAD / GETYFI)).toFixed(5));
    $("#CLP").val((ak * (getclp / GETYFI)).toFixed(5));
	$("#VESDOLTODAY").val((ak * ((GETDOLTODAY * (arrgetusd / GETYFI)))).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * ((GETDOLTODAYBTC * (arrgetusd / GETYFI)))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * ((GETDOLTODAYLOCBTC * (arrgetusd / GETYFI)))).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * ((GETMNTDOLVZLA * (arrgetusd / GETYFI)))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / GETYFI).toFixed(8));
    $("#SAT").val(((ak / GETYFI) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / GETYFI)).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / GETYFI)).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / GETYFI)).toFixed(8));
    $("#ETH").val((ak * (GETETH / GETYFI)).toFixed(8));
    $("#BAT").val((ak * (GETBAT / GETYFI)).toFixed(8));
    $("#LTC").val((ak * (GETLTC / GETYFI)).toFixed(8));
    $("#XMR").val((ak * (GETXMR / GETYFI)).toFixed(8));
    $("#DASH").val((ak * (GETDASH / GETYFI)).toFixed(8));
    $("#ADA").val((ak * (GETADA / GETYFI)).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / GETYFI)).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / GETYFI)).toFixed(8));
    $("#BTT").val((ak * (GETBTT / GETYFI)).toFixed(8));
    $("#FIL").val((ak * (GETFIL / GETYFI)).toFixed(8));
	$("#LBC").val((ak * (GETLBC / GETYFI)).toFixed(8));

});

$("#VESCMC").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / arrgetves)).toFixed(5));
    $("#EUR").val((ak * (arrgeteur / arrgetves)).toFixed(5));
    $("#BRL").val((ak * (getbrl / arrgetves)).toFixed(5));
    $("#COP").val((ak * (getcop / arrgetves)).toFixed(5));
    //$("#VESCMC").val((ak * (arrgetves / GETLBC)).toFixed(2));
    $("#VESBITVEN").val((ak * ((bitvenref * (arrgetusd / arrgetves)))).toFixed(2));
    $("#ARS").val((ak * (GETARS / arrgetves)).toFixed(5));
    $("#CAD").val((ak * (GETCAD / arrgetves)).toFixed(5));
    $("#CLP").val((ak * (getclp / arrgetves)).toFixed(5));
	$("#VESDOLTODAY").val((ak * ((GETDOLTODAY * (arrgetusd / arrgetves)))).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * ((GETDOLTODAYBTC * (arrgetusd / arrgetves)))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * ((GETDOLTODAYLOCBTC * (arrgetusd / arrgetves)))).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * ((GETMNTDOLVZLA * (arrgetusd / arrgetves)))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / arrgetves).toFixed(8));
    $("#SAT").val(((ak / arrgetves) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / arrgetves)).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / arrgetves)).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / arrgetves)).toFixed(8));
    $("#ETH").val((ak * (GETETH / arrgetves)).toFixed(8));
    $("#BAT").val((ak * (GETBAT / arrgetves)).toFixed(8));
    $("#LTC").val((ak * (GETLTC / arrgetves)).toFixed(8));
    $("#XMR").val((ak * (GETXMR / arrgetves)).toFixed(8));
    $("#DASH").val((ak * (GETDASH / arrgetves)).toFixed(8));
    $("#ADA").val((ak * (GETADA / arrgetves)).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / arrgetves)).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / arrgetves)).toFixed(8));
    $("#BTT").val((ak * (GETBTT / arrgetves)).toFixed(8));
    $("#FIL").val((ak * (GETFIL / arrgetves)).toFixed(8));
    $("#LBC").val((ak * (GETLBC / arrgetves)).toFixed(8));
	$("#YFI").val((ak * (GETYFI / arrgetves)).toFixed(8));

});

$("#VESBITVEN").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / (bitvenref * arrgetusd))).toFixed(5));
    $("#EUR").val((ak * (arrgeteur / (bitvenref * arrgetusd))).toFixed(5));
    $("#BRL").val((ak * (getbrl / (bitvenref * arrgetusd))).toFixed(5));
    $("#COP").val((ak * (getcop / (bitvenref * arrgetusd))).toFixed(5));
    $("#VESCMC").val((ak * (arrgetves / (bitvenref * arrgetusd))).toFixed(2));
    $("#ARS").val((ak * (GETARS / (bitvenref * arrgetusd))).toFixed(5));
    $("#CAD").val((ak * (GETCAD / (bitvenref * arrgetusd))).toFixed(5));
    $("#CLP").val((ak * (getclp / (bitvenref * arrgetusd))).toFixed(5));
	$("#VESDOLTODAY").val((ak * ((GETDOLTODAY / (bitvenref)))).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * ((GETDOLTODAYBTC / (bitvenref)))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * ((GETDOLTODAYLOCBTC / (bitvenref)))).toFixed(2));
	$(VESMNTDOLVZLA).val((ak * ((GETMNTDOLVZLA / (bitvenref)))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / (bitvenref * arrgetusd)).toFixed(8));
    $("#SAT").val(((ak / (bitvenref * arrgetusd)) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / (bitvenref * arrgetusd))).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / (bitvenref * arrgetusd))).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / (bitvenref * arrgetusd))).toFixed(8));
    $("#ETH").val((ak * (GETETH / (bitvenref * arrgetusd))).toFixed(8));
    $("#BAT").val((ak * (GETBAT / (bitvenref * arrgetusd))).toFixed(8));
    $("#LTC").val((ak * (GETLTC / (bitvenref * arrgetusd))).toFixed(8));
    $("#XMR").val((ak * (GETXMR / (bitvenref * arrgetusd))).toFixed(8));
    $("#DASH").val((ak * (GETDASH / (bitvenref * arrgetusd))).toFixed(8));
    $("#ADA").val((ak * (GETADA / (bitvenref * arrgetusd))).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / (bitvenref * arrgetusd))).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / (bitvenref * arrgetusd))).toFixed(8));
    $("#BTT").val((ak * (GETBTT / (bitvenref * arrgetusd))).toFixed(8));
    $("#FIL").val((ak * (GETFIL / (bitvenref * arrgetusd))).toFixed(8));
    $("#LBC").val((ak * (GETLBC / (bitvenref * arrgetusd))).toFixed(8));
	$("#YFI").val((ak * (GETYFI / (bitvenref * arrgetusd))).toFixed(8));

});
// DolToday
$("#VESDOLTODAY").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / (GETDOLTODAY * arrgetusd))).toFixed(5));
    $("#EUR").val((ak * (arrgeteur / (GETDOLTODAY * arrgetusd))).toFixed(5));
    $("#BRL").val((ak * (getbrl / (GETDOLTODAY * arrgetusd))).toFixed(5));
    $("#COP").val((ak * (getcop / (GETDOLTODAY * arrgetusd))).toFixed(5));
    $("#VESCMC").val((ak * (arrgetves / (GETDOLTODAY * arrgetusd))).toFixed(2));
	$("#VESBITVEN").val((ak * (bitvenref / (GETDOLTODAY))).toFixed(2));
    $("#ARS").val((ak * (GETARS / (GETDOLTODAY * arrgetusd))).toFixed(5));
    $("#CAD").val((ak * (GETCAD / (GETDOLTODAY * arrgetusd))).toFixed(5));
    $("#CLP").val((ak * (getclp / (GETDOLTODAY * arrgetusd))).toFixed(5));
	//$("#VESDOLTODAY").val((ak * ((GETDOLTODAY * (arrgetusd / GETDOLTODAY)))).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * (GETDOLTODAYBTC / (GETDOLTODAY))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * (GETDOLTODAYLOCBTC / (GETDOLTODAY))).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * (GETMNTDOLVZLA / (GETDOLTODAY))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / (GETDOLTODAY * arrgetusd)).toFixed(8));
    $("#SAT").val(((ak / (GETDOLTODAY * arrgetusd)) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / (GETDOLTODAY * arrgetusd))).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / (GETDOLTODAY * arrgetusd))).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / (GETDOLTODAY * arrgetusd))).toFixed(8));
    $("#ETH").val((ak * (GETETH / (GETDOLTODAY * arrgetusd))).toFixed(8));
    $("#BAT").val((ak * (GETBAT / (GETDOLTODAY * arrgetusd))).toFixed(8));
    $("#LTC").val((ak * (GETLTC / (GETDOLTODAY * arrgetusd))).toFixed(8));
    $("#XMR").val((ak * (GETXMR / (GETDOLTODAY * arrgetusd))).toFixed(8));
    $("#DASH").val((ak * (GETDASH / (GETDOLTODAY * arrgetusd))).toFixed(8));
    $("#ADA").val((ak * (GETADA / (GETDOLTODAY * arrgetusd))).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / (GETDOLTODAY * arrgetusd))).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / (GETDOLTODAY * arrgetusd))).toFixed(8));
    $("#BTT").val((ak * (GETBTT / (GETDOLTODAY * arrgetusd))).toFixed(8));
    $("#FIL").val((ak * (GETFIL / (GETDOLTODAY * arrgetusd))).toFixed(8));
    $("#LBC").val((ak * (GETLBC / (GETDOLTODAY * arrgetusd))).toFixed(8));
	$("#YFI").val((ak * (GETYFI / (GETDOLTODAY * arrgetusd))).toFixed(8));

});

$("#VESDOLTODAYBTC").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / (GETDOLTODAYBTC * arrgetusd))).toFixed(5));
    $("#EUR").val((ak * (arrgeteur / (GETDOLTODAYBTC * arrgetusd))).toFixed(5));
    $("#BRL").val((ak * (getbrl / (GETDOLTODAYBTC * arrgetusd))).toFixed(5));
    $("#COP").val((ak * (getcop / (GETDOLTODAYBTC * arrgetusd))).toFixed(5));
    $("#VESCMC").val((ak * (arrgetves / (GETDOLTODAYBTC * arrgetusd))).toFixed(2));
	$("#VESBITVEN").val((ak * (bitvenref / (GETDOLTODAYBTC))).toFixed(2));
    $("#ARS").val((ak * (GETARS / (GETDOLTODAYBTC * arrgetusd))).toFixed(5));
    $("#CAD").val((ak * (GETCAD / (GETDOLTODAYBTC * arrgetusd))).toFixed(5));
    $("#CLP").val((ak * (getclp / (GETDOLTODAYBTC * arrgetusd))).toFixed(5));
	$("#VESDOLTODAY").val((ak * (GETDOLTODAY / (GETDOLTODAYBTC))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * (GETDOLTODAYLOCBTC / (GETDOLTODAYBTC))).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * (GETMNTDOLVZLA / (GETDOLTODAYBTC))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / (GETDOLTODAYBTC * arrgetusd)).toFixed(8));
    $("#SAT").val(((ak / (GETDOLTODAYBTC * arrgetusd)) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / (GETDOLTODAYBTC * arrgetusd))).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / (GETDOLTODAYBTC * arrgetusd))).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / (GETDOLTODAYBTC * arrgetusd))).toFixed(8));
    $("#ETH").val((ak * (GETETH / (GETDOLTODAYBTC * arrgetusd))).toFixed(8));
    $("#BAT").val((ak * (GETBAT / (GETDOLTODAYBTC * arrgetusd))).toFixed(8));
    $("#LTC").val((ak * (GETLTC / (GETDOLTODAYBTC * arrgetusd))).toFixed(8));
    $("#XMR").val((ak * (GETXMR / (GETDOLTODAYBTC * arrgetusd))).toFixed(8));
    $("#DASH").val((ak * (GETDASH / (GETDOLTODAYBTC * arrgetusd))).toFixed(8));
    $("#ADA").val((ak * (GETADA / (GETDOLTODAYBTC * arrgetusd))).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / (GETDOLTODAYBTC * arrgetusd))).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / (GETDOLTODAYBTC * arrgetusd))).toFixed(8));
    $("#BTT").val((ak * (GETBTT / (GETDOLTODAYBTC * arrgetusd))).toFixed(8));
    $("#FIL").val((ak * (GETFIL / (GETDOLTODAYBTC * arrgetusd))).toFixed(8));
    $("#LBC").val((ak * (GETLBC / (GETDOLTODAYBTC * arrgetusd))).toFixed(8));
	$("#YFI").val((ak * (GETYFI / (GETDOLTODAYBTC * arrgetusd))).toFixed(8));

});

$("#VESDOLTODAYLOCBTC").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / (GETDOLTODAYLOCBTC * arrgetusd))).toFixed(5));
    $("#EUR").val((ak * (arrgeteur / (GETDOLTODAYLOCBTC * arrgetusd))).toFixed(5));
    $("#BRL").val((ak * (getbrl / (GETDOLTODAYLOCBTC * arrgetusd))).toFixed(5));
    $("#COP").val((ak * (getcop / (GETDOLTODAYLOCBTC * arrgetusd))).toFixed(5));
    $("#VESCMC").val((ak * (arrgetves / (GETDOLTODAYLOCBTC * arrgetusd))).toFixed(2));
	$("#VESBITVEN").val((ak * (bitvenref / (GETDOLTODAYLOCBTC))).toFixed(2));
    $("#ARS").val((ak * (GETARS / (GETDOLTODAYLOCBTC * arrgetusd))).toFixed(5));
    $("#CAD").val((ak * (GETCAD / (GETDOLTODAYLOCBTC * arrgetusd))).toFixed(5));
    $("#CLP").val((ak * (getclp / (GETDOLTODAYLOCBTC * arrgetusd))).toFixed(5));
	$("#VESDOLTODAY").val((ak * (GETDOLTODAY / (GETDOLTODAYLOCBTC))).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * (GETDOLTODAYBTC / (GETDOLTODAYLOCBTC))).toFixed(2));
	//$("#VESDOLTODAYLOCBTC").val((ak * ((GETDOLTODAYLOCBTC * (arrgetusd / GETDOLTODAYBTC)))).toFixed(2));
	$("#VESMNTDOLVZLA").val((ak * (GETMNTDOLVZLA / (GETDOLTODAYLOCBTC))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / (GETDOLTODAYLOCBTC * arrgetusd)).toFixed(8));
    $("#SAT").val(((ak / (GETDOLTODAYLOCBTC * arrgetusd)) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / (GETDOLTODAYLOCBTC * arrgetusd))).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / (GETDOLTODAYLOCBTC * arrgetusd))).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / (GETDOLTODAYLOCBTC * arrgetusd))).toFixed(8));
    $("#ETH").val((ak * (GETETH / (GETDOLTODAYLOCBTC * arrgetusd))).toFixed(8));
    $("#BAT").val((ak * (GETBAT / (GETDOLTODAYLOCBTC * arrgetusd))).toFixed(8));
    $("#LTC").val((ak * (GETLTC / (GETDOLTODAYLOCBTC * arrgetusd))).toFixed(8));
    $("#XMR").val((ak * (GETXMR / (GETDOLTODAYLOCBTC * arrgetusd))).toFixed(8));
    $("#DASH").val((ak * (GETDASH / (GETDOLTODAYLOCBTC * arrgetusd))).toFixed(8));
    $("#ADA").val((ak * (GETADA / (GETDOLTODAYLOCBTC * arrgetusd))).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / (GETDOLTODAYLOCBTC * arrgetusd))).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / (GETDOLTODAYLOCBTC * arrgetusd))).toFixed(8));
    $("#BTT").val((ak * (GETBTT / (GETDOLTODAYLOCBTC * arrgetusd))).toFixed(8));
    $("#FIL").val((ak * (GETFIL / (GETDOLTODAYLOCBTC * arrgetusd))).toFixed(8));
    $("#LBC").val((ak * (GETLBC / (GETDOLTODAYLOCBTC * arrgetusd))).toFixed(8));
	$("#YFI").val((ak * (GETYFI / (GETDOLTODAYLOCBTC * arrgetusd))).toFixed(8));

});

//VESMNTDOLVZLA GETMNTDOLVZLA
$("#VESMNTDOLVZLA").keyup(function () {
    var ak = $(this).val();

    /*gubernamentales*/
    $("#USD").val((ak * (arrgetusd / (GETMNTDOLVZLA * arrgetusd))).toFixed(5));
    $("#EUR").val((ak * (arrgeteur / (GETMNTDOLVZLA * arrgetusd))).toFixed(5));
    $("#BRL").val((ak * (getbrl / (GETMNTDOLVZLA * arrgetusd))).toFixed(5));
    $("#COP").val((ak * (getcop / (GETMNTDOLVZLA * arrgetusd))).toFixed(5));
    $("#VESCMC").val((ak * (arrgetves / (GETMNTDOLVZLA * arrgetusd))).toFixed(2));
	$("#VESBITVEN").val((ak * (bitvenref / (GETMNTDOLVZLA))).toFixed(2));
    $("#ARS").val((ak * (GETARS / (GETMNTDOLVZLA * arrgetusd))).toFixed(5));
    $("#CAD").val((ak * (GETCAD / (GETMNTDOLVZLA * arrgetusd))).toFixed(5));
    $("#CLP").val((ak * (getclp / (GETMNTDOLVZLA * arrgetusd))).toFixed(5));
	$("#VESDOLTODAY").val((ak * (GETDOLTODAY / (GETMNTDOLVZLA))).toFixed(2));
	$("#VESDOLTODAYBTC").val((ak * (GETDOLTODAYBTC / (GETMNTDOLVZLA))).toFixed(2));
	$("#VESDOLTODAYLOCBTC").val((ak * ((GETMNTDOLVZLA * (arrgetusd / GETDOLTODAYBTC)))).toFixed(2));

    /*eCoins:*/
    $("#BTC").val((ak / (GETMNTDOLVZLA * arrgetusd)).toFixed(8));
    $("#SAT").val(((ak / (GETMNTDOLVZLA * arrgetusd)) * GETSAT).toFixed(2));
    $("#BOLI").val((ak * (GETBOLI / (GETMNTDOLVZLA * arrgetusd))).toFixed(8));
    $("#AREPA").val((ak * (GETAREPA / (GETMNTDOLVZLA * arrgetusd))).toFixed(8));
    $("#DOGE").val((ak * (GETDOGE / (GETMNTDOLVZLA * arrgetusd))).toFixed(8));
    $("#ETH").val((ak * (GETETH / (GETMNTDOLVZLA * arrgetusd))).toFixed(8));
    $("#BAT").val((ak * (GETBAT / (GETMNTDOLVZLA * arrgetusd))).toFixed(8));
    $("#LTC").val((ak * (GETLTC / (GETMNTDOLVZLA * arrgetusd))).toFixed(8));
    $("#XMR").val((ak * (GETXMR / (GETMNTDOLVZLA * arrgetusd))).toFixed(8));
    $("#DASH").val((ak * (GETDASH / (GETMNTDOLVZLA * arrgetusd))).toFixed(8));
    $("#ADA").val((ak * (GETADA / (GETMNTDOLVZLA * arrgetusd))).toFixed(8));
    $("#PIVX").val((ak * (GETPIVX / (GETMNTDOLVZLA * arrgetusd))).toFixed(8));
    $("#STEEM").val((ak * (GETSTEEM / (GETMNTDOLVZLA * arrgetusd))).toFixed(8));
    $("#BTT").val((ak * (GETBTT / (GETMNTDOLVZLA * arrgetusd))).toFixed(8));
    $("#FIL").val((ak * (GETFIL / (GETMNTDOLVZLA * arrgetusd))).toFixed(8));
    $("#LBC").val((ak * (GETLBC / (GETMNTDOLVZLA * arrgetusd))).toFixed(8));
	$("#YFI").val((ak * (GETYFI / (GETMNTDOLVZLA * arrgetusd))).toFixed(8));

});

});
