

<?php


class paypal_IPN{

public function __construct($mode = 'live'){

    if($mode == 'live')
        $this = _url = 'https://www.paypal.com/cgi-bin/webscr';

    else
        $this = _url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
    



}



public function run(){

$postFields = 'cmd=_notify-validate';

foreach($_POST as $Key => $value){
    $postFields.= "&$key=".urlencode($value);

}




$ch = curl_init();
curl_setopt_array($sch,array(
    CURLOPT_URL => $this->url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER =>false,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS =>$postFields



));

$result = curl_exec($ch);
curl_close($ch);

$fh = fopen('result.txt','w');
fwrite($fh,$result . ' -- ' . $postFields);
fclose($fh);

echo $result;


}





}











?>