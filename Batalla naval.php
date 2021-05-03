<?php
    $vidas=9;
    if($vidas>0)
    {
        echo "<head>
            <meta charset=utf-8>
            <title>Bata Naval</title>
            </head>";
        
        echo "<legend><h1>Batalla Naval</h1></legend>
            <h2><strong>Vidas:</strong></h3>";
            for($vi=9; $vi>0; $vi--)
            {
                echo "<img src='Nave.jpg' width= 20>";
            }
        
        echo "<p>Historial de disparos:</p>";
            
        echo "<form action=./Batalla naval.php method=>
            <label for=Nguests class=col-md-2 col-form-label>Posición X(Letra):</label>
            <select name= X>
                    <option value=A>A</option>
                    <option value=B>B</option>
                    <option value=C>C</option>
                    <option value=D>D</option>
                    <option value=E>E</option>
                    <option value=F>F</option>
                    <option value=G>G</option>
                    <option value=H>H</option>
                    <option value=I>I</option>
                    <option value=J>J</option>
                </select>
            <label for=Nguests class=col-md-2 col-form-label>Posición Y(Número):</label>
            <input type=number name=Y min= 1 max= 10 required>
            <input type=submit value=Disparar></form>";
        
        $X=(isset($_POST["X"]) && $_POST["X"]!= "") ?$_POST["X"]: "Inválido";
        $Y=(isset($_POST["Y"]) && $_POST["Y"]!= "") ?$_POST["Y"]: "Inválido";
        $vidas-=1;
    }
?>