<?php

class Crud
{

  function insert($old_data, $atual_data){

        echo "<pre>Dados Antigos <hr>";
        var_dump($old_data);
        echo "</pre><hr>";

        echo "<pre>Dados Novos <hr>";
        var_dump($atual_data);
        echo "</pre><hr>";

    //$merge recebe a "soma" dos dois arrays
    $merge = array_merge($old_data, $atual_data);

    //$array_diff recebe a subtração do array $merge com o array $old_data
    $array_diff = array_diff($merge, $old_data);

    echo "<pre> Merge<br>";
    var_dump($merge);
    echo "</pre>";

    echo "<pre> Diff<br>";
    var_dump($array_diff);
    echo "</pre>";

    if($array_diff == NULL){
      echo "Não há novos produtos para inserir!";
      //return false;
    }else {
      echo "<pre> Produto(s) inserido(s) com sucesso!<br>";
      var_dump($array_diff);
      echo "</pre>";
      /*
      funtion createQuery(){
        return $query;
      }
      */
    }
  }

  function delete($old_data, $atual_data){
    echo "Delete<br>";
  }

  function update($old_data, $atual_data){
    echo "Update<br>";
  }

}


?>
