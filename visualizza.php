<!DOCTYPE html>
<html>
<head>
<title>Auto</title>
</head>

<body>

<table border="1">
    <tr>
    <td bgcolor="LightBlue"><b>Marca</b></td>
    <td>
    <?php echo $_GET["marca"]; 
    ?></td>
    </tr>

    <tr>
    <td bgcolor="LightBlue"><b>Modello</b></td>
    <td>
    <?php echo $_GET["modello"]; 
    ?></td>
    </tr>

    <tr>
    <td bgcolor="LightBlue"><b>Stato</b></td>
    <td>
    <?php echo $_GET["stato"]; 
    ?></td>
    </tr>

    <tr>
        <td bgcolor="LightBlue"><b>Anno Costruzione</b></td>
        <td>
    <?php echo $_GET["anno"]; 
    ?></td>
    </tr>

    <tr>
        <td bgcolor="LightBlue"><b>Cilindrata</b></td>
        <td>
    <?php echo $_GET["cilindrata"]; 
    ?>
    </td>
</tr>
<tr>
    <td bgcolor="LightBlue"><b>Cavalli</b></td>
    <td>
    <?php echo $_GET["cavalli"]; 
    ?></td>
    </tr>

    <tr>
        <td bgcolor="LightBlue"><b>Prezzo</b></td>
        <td>
    <?php echo $_GET["prezzo"]; 
    ?> Euro</td>
    </tr>

    <tr>
        <td bgcolor="LightBlue"><b>Targa</b></td>
        <td>
    <?php echo $_GET["targa"]; 
    ?></td>
    </tr>

    <tr>
        <td bgcolor="LightBlue"><b>Accessori</b></td>
        <td>
            <?php
            if (isset($_GET["accessori"])) {
                echo implode(", ", $_GET["accessori"]);

                } else {
                    echo "Nessun accessorio";
                    }
                    ?>
                    </td>
                </tr>

                <tr>
                    <td bgcolor="LightBlue"><b>Descrizione Aggiuntiva</b></td>
                    <td>
                        <?php echo $_GET["descrizione"]; 
                        ?></td>
                        </tr>

                    </table>

                </body>
                </html>