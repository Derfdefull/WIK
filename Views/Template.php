<?php
include_once '../Controllers/TemplateController.php';
include_once '../Models/TemplateModel.php';

$ActionViewer = new TemplateController();

include $ActionViewer->RequestViews('Botones');