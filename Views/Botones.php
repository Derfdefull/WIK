<?php
$arrayName = array('primary', 'secondary', 'sucess', 'danger', 'warning', 'info', 'light', 'dark', 'link');
echo "hola deni";
for ($index = 0; $index < sizeof($arrayName); $index++) {
    echo '<button type="button" name="" id="" class="btn btn-' . $arrayName[$index] . '" btn-lg btn-block>' . $index . '</button>';
}
