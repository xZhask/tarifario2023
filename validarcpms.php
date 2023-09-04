<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/47b4aaa3bf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="resources/js/jquery-ui-1.13.1/jquery-ui.min.css">
    <link rel="stylesheet" href="resources/css/styles.css">
    <link rel="icon" type="image/png" href="resources/img/calendarioPrecios.png" />
    <title>Tarifario 05-2023 | CPMS</title>
</head>

<body>
    <div class="preloader">
        <div class="cont-img">
            <img src="resources/img/_EscudoSanidad.png" alt="Escudo sanidad">
            <img src="resources/img/_EscudoPNP.png" alt="Escudo PNP">
        </div>
        <div class="circle-load"></div>
        <p>Cargando...</p>
    </div>
    <div class="wrapper">
        <header>
            <div class="cont-inputsearch">
                <input type="text" id="ipress-validador" value="<?php echo $_SESSION['active']; ?>" readonly>
            </div>
            <div class="cont-info-tarifario">
                <h2>Tarifario Actual: 05-2023</h2>
                <img src="resources/img/_EscudoSanidad.png" alt="">
            </div>
        </header>
        <div class="section">
            <div class="container">
                <form action="" method="post" name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
                    <div>
                        <label>Seleccionar Archivo Excel</label>
                        <input type="file" name="mi-archivo" id="mi-archivo" accept=".xls,.xlsx">
                        <button type="submit" id="submit" name="import" class="btn-submit">Import</button>
                    </div>
                </form>
            </div>
            <div class="container cont-table">
                <table>
                    <thead>
                        <tr>
                            <th>Código CPMS</th>
                            <th>Descripción CPMS</th>
                            <th>Id Atención</th>
                            <th>Responsable</th>
                        </tr>
                    </thead>
                    <tbody id="cont-result"></tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script>
    //ipress = 

    //ipress.text('miau')
</script>
<script language="javascript" src="resources/js/jquery-3.6.0.min.js"></script>
<script language="javascript" src="resources/js/jquery-ui-1.13.1/jquery-ui.min.js"></script>
<script language="javascript" src="resources/js/functions.js"></script>

</html>