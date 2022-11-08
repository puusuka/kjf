<?php
$company = htmlspecialchars($_GET['company'], ENT_QUOTES);
echo "私の名前は、" . $company ;
echo '</br>';
 $gender = $_GET['gender'];
echo 'ご希望商品は'.$gender.'セット';
$math = $_GET['math'];
  echo '注文数は、'.$math.'セット';

 



