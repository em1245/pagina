

<?php


$query = 'subir__c';

    $contactData = array(
        'nombre'       =>   $event_id,-->(String)'salesforce id'
        'texto'     =>   $form_id, --> (String)'salesforce idss'
   
     );

    $sf_helpers = new Test_Helpers();
    $response = $sf_helpers->SF_CREATE($query, $contactData);


?>