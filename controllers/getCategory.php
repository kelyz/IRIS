<?php
    class getCategory extends Controller{
             function run($xml){
             global $FILE_ROOT, $STORAGE, $REQ_ID, $CMD_EXTRA, $LIB, $BIN;
             
             $file = $xml->filename;
             $arrlength = count($arr);
             
             for($i = 0; $i < $arrlength; $i++){
             $lengthcolumn = count($arr[i]);
                for($j = 0; $j < $lengthcolumn; $j++){
                    if($arr[i][j] == file){
                    echo $arr[i][j];
                    
                    }
                
                }
             
             }
             
             
             
             
             
             
             }
    
    
    
    
    
    
    
    
    
    }
