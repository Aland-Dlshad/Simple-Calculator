<?php 
include("function.php");

?>
<html lang="en">
<head>
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>
<body>

        
     
    <div class="form">
       
            <img src="img/calculator.png"  class="cal" >
        <h1 class="calc">Calculator</h1>
      <label class="result">Result:</label>
    <label class="result"><?php plus(); minus(); times(); divide(); ?></label>
    <form action="" method="POST" class="for">
     
    <input type="number"name="f" class="inp" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');"  value="0">
    
    <input type="number"name="s" class="inp" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');"  value="0">
    
    <input type="submit" name="plus"  class="btn" value="+">
    <input type="submit" name="minus" class="btn" value="-">
    <input type="submit" name="times" class="btn" value="*">
    <input type="submit" name="divide" class="btn" value="/">
    </form>
    </div>
</body>
</html>
<!-- <section>Ⓒ2022-Aland-Dlshad</section> -->
