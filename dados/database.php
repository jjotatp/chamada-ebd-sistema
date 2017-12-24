<?php

    //ler registros
    function DBRead($table, $params = null, $fields = '*'){
        // $table  = DB_PREFIX.'_'.$table;
        $params = ($params) ? " {$params}" : null;
        
        $query  = "SELECT {$fields} FROM {$table}{$params}";
        $result = DBExecute($query);
        
        if (!mysqli_num_rows($result)) {
            return false;
        }
        else {
        while ($res = mysqli_fetch_assoc($result)) {
            $data[] = $res;
        }
        return $data;
    }
}
    
    //gravar registros
    function DBCreate($table, array $data){
        // $table = DB_PREFIX.'_'.$table;
        $data = DBEscape($data);
        
        $filds  = implode(', ', array_keys($data));
        $values = "'".implode("', '", $data)."'";
        
        $query  = "INSERT INTO {$table}( {$filds} ) VALUE ( {$values} )";
        
        return DBExecute($query);
    }
    
    //Execulta Querys
    function DBExecute($query){
        $link   = DBConect();
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
      //$result = @mysqli_query($link, $query) or die(mysqli_error());
                
        DBClose($link);
        return $result;
    }