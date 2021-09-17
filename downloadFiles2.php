<?php
/*Esta parte del código, nos ayuda a localizar y leer el archivo que despues se descargará desde el sitio web*/
    header("Content-disposition: attachment; filename=documentosUniversidad.pdf");
    header("Content-type: application/pdf");
    readfile("arch/documentosUniversidad.pdf");
?>