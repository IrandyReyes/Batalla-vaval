<?php
    $vidas=9;
    if($vidas>0)
    {
        echo "<head>
            <meta charset=utf-8>
            <title>Bata Naval</title>
            </head>";
        
        echo "<form action=./Batalla naval.php method=get>
            <legend><h1>Batalla Naval</h1></legend>
            <h2><strong>Vidas:</strong></h3>";
            for($vi=9; $vi>0; $vi--)
            {
                echo "<img src='Nave.jpg' width= 20>";
            }
        
        echo "<p>Historial de disparos:</p>";
            
        echo "<label for=Nguests class=col-md-2 col-form-label>Posición X(Letra):</label>
            <input type=text name=X required>
            <label for=Nguests class=col-md-2 col-form-label>Posición Y(Número):</label>
            <input type=number name=Y required>
            <input type=submit value=Disparar>
            </form>";
        $vidas-=1;
    }
?>