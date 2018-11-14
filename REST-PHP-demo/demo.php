<?php


include 'lib.php';

//实例化类库
$req = new req();

echo $req->contract_contract_info().'<br /><br /><br />';
echo $req->contract_index().'<br /><br /><br />';
echo $req->contract_price_limit().'<br /><br /><br />';
echo $req->contract_open_interest().'<br /><br /><br />';
echo $req->market_depth().'<br /><br /><br />';
echo $req->market_history().'<br /><br /><br />';
echo $req->market_merged().'<br /><br /><br />';
echo $req->market_trade().'<br /><br /><br />';
echo $req->market_history_trade().'<br /><br /><br />';

echo $req->contract_account_info("BTC").'<br /><br /><br />';
echo $req->contract_position_info("BTC").'<br /><br /><br />';
echo $req->contract_order().'<br /><br /><br />';

?>
