<?php
   //TRABALHANDO COM ARRAYS

   function mostrar_array($vetor){
    foreach ($vetor as $vetores) {
        echo $vetores . "<br>";
    }

   }

   function mostra_um($vetor2,$pos){
    echo $vetor2[$pos];
   }

   $n = [1,2,3,4,5];
   $nomes = ['angelo','osvaldo','apucados','joao','gremio'];

   mostrar_array($n);
   mostrar_array($nomes);
   mostra_um($nomes,3);

   
   
   

?>