<?php
//Test Connection
require_once("isdk.php");	
$app = new iSDK;

if( $app->cfgCon("aa478")){ 
    $contact_id = $_REQUEST['contact_id'];
    
    
    $returnFields = array('Company');
    $conDat = $app->dsLoad("Contact", $contact_id, $returnFields);

    foreach($conDat as $a) {
        $company = $a;
    }

    $returnFields = array('CompanyID');
    $companyy = $app->dsFind('Company',1,0,'Company',$company,$returnFields);

    foreach($companyy as $b){
       echo $result = $b['CompanyID'];
    }

    if($result == ''){
        $data = array('Company' => $company);
        $app->dsAdd("Company", $data);

        $returnFields = array('CompanyID');
        $results = $app->dsFind('Company',1,0,'Company',$company,$returnFields);

        foreach($results as $c){
            $newcompanyid = $c['CompanyID'];
        }

        $grp = array('CompanyID' => $newcompanyid,'Company' => $company);
        $grpID = $app->dsUpdate("Contact", $contact_id, $grp);

        echo $grpID."suggest creating company";
    }else{
        $grp = array('CompanyID' => $result,
        'Company' => $company);
        $grpID = $app->dsUpdate("Contact", $contact_id, $grp);
        $grpID."success 2";
    }
}
?>

