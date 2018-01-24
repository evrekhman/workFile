<form enctype="multipart/form-data" method="POST">
    
    <input type="text" name="userfile">
    <input type="submit" value="Send">
</form>

<?
    
    function readdFile($nameFile,$keyValue){
        $handle = file_get_contents($nameFile.".txt");
        $arra = array();
        $ex = explode("x0A", $handle);

        foreach ($ex as $key => $value) {
            
            $ex1 = explode("\\t", $value);        

            foreach ($ex1 as $k => $v) {
                
                if($k==0){
                    $kkk = $v;
                }
                if($k==1){
                    $vvv = $v;
                }
                if(isset($vvv))
                $arra[$kkk]=$vvv;

            }

        }
        
        

        if($new = preg_grep("#".$keyValue."#", array_keys($arra))){
           
            foreach ($new as $key => $value) {
                # code...
                if($keyValue)
                print_r($arra[$value]);
            }
            
        }
        

      
    }
    
    if(isset($_POST['userfile'])){
        $text = $_POST['userfile'];
        readdFile("ara",$text);
    }

?>