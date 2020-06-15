<?php
header('Content-type: text/javascript');
$json=array(
  'success' => false,
  'result' => 0
);

$from = $_GET['from'];
$to = $_GET['to'];
$amount = $_GET['amount'];

$endpoint='latest';
$access_key='4dd16c170d9a7b96dd0158cfc8520a3d';

//$endpoint='live';
//$access_key='950a5b620c734ceccfffc67edb3f0aa2';

$string = $from. "_". $to;

//$ch=curl_init('http://www.api.currencylayer.com/'.$endpoint.'?access_key='.$access_key.'&from='.$from.'&to='.$to.'&amount='.$amount.'');
if(isset($_GET['from'],$_GET['to']))
{
  $ch=curl_init('http://data.fixer.io/api/'.$endpoint.'?access_key='.$access_key.'&from='.$from.'&to='.$to.'&amount='.$amount.'');
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

  $json=curl_exec($ch);
  curl_close($ch);

  //  $rates=json_decode($json,true);
  //$rate = $json[$string];
  //$total=($rate*$amount);

  $json['success'] = true;
  //$json['result']=($rate*$amount);

  echo json_encode($json);//to display all the contents of json array...
}
?>
