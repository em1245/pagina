<?php



public class Test_Helpers(){





    public function SF_CREATE($query, $data){

        $curl = curl_init($this->instance_url . '/services/apexrest/' . $query);
        $content = json_encode($data);
    
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER,array("Authorization: OAuth " . $this->access_token,"Content-type: application/json"));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt ($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $content);
    
        $json_response = curl_exec($curl);
        curl_close($curl);

    
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    }








}




?>