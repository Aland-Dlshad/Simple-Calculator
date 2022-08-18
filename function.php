<?php 
function plus(){

 if (isset($_POST['plus'])) {
  echo  $_POST['f']+$_POST['s'];
    
 }
 };
 function minus(){

    if (isset($_POST['minus'])) {
     echo  $_POST['f']-$_POST['s'];
       
    }
    };
    function times(){

        if (isset($_POST['times'])) {
         echo  $_POST['f']*$_POST['s'];
           
        }
        };
        function divide(){

            if (isset($_POST['divide'])) {
             echo  $_POST['f'] / $_POST['s'];
               
            }
            };





?>