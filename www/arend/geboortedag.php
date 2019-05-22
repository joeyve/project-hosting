<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - Geboortedag</title>
    </head>
    <body>
        <h4>Geboortedag</h4>

        <?php
        $maanden = array("januari", "februari", "maart", "april", "mei", "juni", "juli", "augustus", "september", "oktober", "november", "december");
        foreach ($maanden as $maand){
			echo "<p>$maand</p>";
		}
		?>
        
    </body>
</html>
