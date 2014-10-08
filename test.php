<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>
</html>
<?php
  $data = array(
    array(
        'Name' => 'Trixie',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers'
        ),
    array(
        'Name' => 'Tinkerbell',
        'Element' => 'Air',
        'Likes' => 'Singning',
        'Color' => 'Blue'
        ), 
    array(
        'Element' => 'Water',
        'Likes' => 'Dancing',
        'Name' => 'Blum',
        'Color' => 'Pink'
        ),
);
  
  
  $scolors = array("red","blue","yellow","pink","white","orange");
  $html = "";
  $td = "";
  
  $html.='<table style="width:100%">';
  
  foreach($data as $key=>$val){
      $html1 = "";    
      if($key == 0){
        $headers = array_keys($val);
      }
      
      $scolorsCount=0;
      foreach($headers as $key1=>$val1){
        
        $td.='<td style="background-color:'.$scolors[$scolorsCount].'">';
        $td.=$val1;
        $td.='</td>';
        
        $html1.='<td style="background-color:'.$scolors[$scolorsCount].'">';
        $html1.=$val[$val1];
        $html1.='</td>';
        
        $scolorsCount++;
      }
      
      if($key == 0){
        $html.='<tr>';
          $html.=$td;
        $html.='</tr>';
      }
      
      $html.='<tr>';
        $html.=$html1;
      $html.='</tr>';
  }
  
  $html.='</table>';
  echo $html;exit;
?>