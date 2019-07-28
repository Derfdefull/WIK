<?php
require_once('./Controllers/TemplateController.php');
require_once('./Models/TemplateModel.php');

$ActionViewer = new TemplateController();
include $ActionViewer->RequestViews($_GET["Action"]);
?>