<?
$user_id = '62';
// $mockData = [
//                ['id'=>'1', 'name' =>'xxfesd'],
//                ['id'=>'2','name' =>'johnson']
//             ];
// $jsonStr = json_encode($mockData);
// var_export($jsonStr);
// echo "\n";
exec('ts-node ./src/index.ts exportJob '.$user_id, $out, $err);
var_export($out);
// $localArray =  json_decode($out[0]);
// var_export($localArray);
