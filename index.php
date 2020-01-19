<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Coinautas Unidos _ Coinauts United</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Si puedes ayudar con alguna donacion para este trabajo y sus mejoras, agradeceriamos muchisimo!
BOLI: bNLSuupmBhTa9dEeWUkr2RncmBcFaUEXx4
AREPA: ATMCtobjwQbo31rRWFAUEvUvZXfxU8QYEW
BTC: 1Kxm5szgwEQRFJCLiCxQFeLGWbF1bckUkc 
DOGE: DH8bChYVrbC1GfRwYDEmypQVmkGCgMGK4r
ETH: 0x049a7a6cd08c1a7c65866417b9a9363b89d6db5d
-->
<script type="text/javascript" src="https://dxj1e0bbbefdtsyig.woldrssl.net/custom/rate.js">//Pag DolToday</script>
<script type="text/javascript" src="data.php"></script>
</head>
<body>
Precio BTC:
<div id="GETUSD"></div>
Precio BTC en EUR:
<div id="GETEUR">
</div>
<!-- Precio $ ref CoinMarketCap:--><div id="refcmc">
</div>

<!-- Precio $ ref BitVen: --><div id="bitvenref">
</div>

Precio del Satoshi ref <a href="https://coinmarketcap.com/converter/">CMC</a>:
<div id="GETVESAT">
</div>

<div class="wrapper">
<table class="table" width="100" border="1" cellspacing="0">
  <tr class="row header">
    <td class="cell" colspan="2">Divisas Gubernamentales:</td>
  </tr>
  <tr class="row">
    <td class="cell"><div align="right">$    </div></td>
    <td><input name="number25" type="number" id="USD"></td>
  </tr class="row">
  <tr class="row">
    <td><div align="right">€    </div></td>
    <td><input name="number24" type="number" id="EUR"></td>
  </tr>
  <tr class="row">
    <td><div align="right">CAD</div></td>
    <td><input name="number23" type="number" id="CAD"></td>
  </tr>
  <tr class="row">
    <td><div align="right">BRL</div></td>
    <td><input name="number22" type="number" id="BRL"></td>
  </tr>
  <tr class="row">
    <td><div align="right">COP</div></td>
    <td><input name="number21" type="number" id="COP"></td>
  </tr>
   <tr class="row">
    <td><div align="right">VES Ref <a href="https://coinmarketcap.com/converter/">CMC</a></div></td>
    <td><input name="number19" type="number" id="VESCMC"></td>
  </tr>
  <tr class="row">
    <td><div align="right">VES Ref <a href="https://www.bitven.com/">BITVEN</a></div></td>
    <td><input name="number20" type="number" id="VESBITVEN"></td>
  </tr>
<!-- DolToday -->
  <tr class="row">
    <td><div align="right">VES Ref <a href="https://dolartoday.com/">DolToday</a></div></td>
    <td><input name="number19" type="number" id="VESDOLTODAY"></td>
  </tr>
    <tr class="row">
    <td><div align="right">VES Ref <a href="https://dolartoday.com/">DolToday</a> BTC</div></td>
    <td><input name="number19" type="number" id="VESDOLTODAYBTC"></td>
  </tr>
    <tr class="row">
    <td><div align="right">VES Ref <a href="https://dolartoday.com/">DolToday</a> LocalBitcoins</div></td>
    <td><input name="number19" type="number" id="VESDOLTODAYLOCBTC"></td>
  </tr>

  <tr class="row">
    <td><div align="right">ARS</div></td>
    <td><input name="number18" type="number" id="ARS"></td>
  </tr>
  <tr class="row">
    <td><div align="right">CLP    </div></td>
    <td><input name="number17" type="number" id="CLP"></td>
  </tr>
  <tr class="row">
    <td colspan="2"><div align="left"><br>
    eCoins:</div></td>
  </tr>
  <tr class="row">
    <td><div align="right">₿</div></td>
    <td><input name="number16" type="number" id="BTC"></td>
  </tr>
  <tr class="row">
    <td><div align="right">SAT</div></td>
    <td><input name="number15" type="number" id="SAT"></td>
  </tr>
  <tr class="row">
    <td><div align="right">BOLI</div></td>
    <td><input name="number14" type="number" id="BOLI"></td>
  </tr>
  <tr class="row">
    <td><div align="right">AREPA</div></td>
    <td><input name="number13" type="number" id="AREPA"></td>
  </tr>
  <tr class="row">
    <td><div align="right">DOGE</div></td>
    <td><input name="number12" type="number" id="DOGE"></td>
  </tr>
  <tr class="row">
    <td><div align="right">ETH</div></td>
    <td><input name="number11" type="number" id="ETH"></td>
  </tr>
  <tr class="row">
    <td><div align="right">BAT    </div></td>
    <td><input name="number10" type="number" id="BAT"></td>
  </tr>
  <tr class="row">
    <td><div align="right">XMR    </div></td>
    <td><input name="number9" type="number" id="XMR"></td>
  </tr>
  <tr class="row">
    <td><div align="right">DASH    </div></td>
    <td><input name="number8" type="number" id="DASH"></td>
  </tr>
  <tr class="row">
    <td><div align="right">ADA    </div></td>
    <td><input name="number7" type="number" id="ADA"></td>
  </tr>
  <tr class="row">
    <td><div align="right">LTC    </div></td>
    <td><input name="number6" type="number" id="LTC"></td>
  </tr>
  <tr class="row">
    <td><div align="right">PIVX    </div></td>
    <td><input name="number5" type="number" id="PIVX"></td>
  </tr>
  <tr class="row">
    <td><div align="right">STEEM    </div></td>
    <td><input name="number4" type="number" id="STEEM"></td>
  </tr>
  <tr class="row">
    <td><div align="right">BTT    </div></td>
    <td><input name="number3" type="number" id="BTT"></td>
  </tr>
  <tr class="row">
    <td><div align="right">FIL      </div></td>
    <td><input name="number2" type="number" id="FIL"></td>
  </tr>
  <tr class="row">
    <td><div align="right">LBC      </div></td>
    <td><input name="number" type="number" id="LBC"></td>
  </tr>
</table>
</div>
<p><br>
</p>

</body>
</html>