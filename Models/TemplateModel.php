<?php

class TemplateModel{

    public function Views($ViewRequest){
        return "./Views/".$ViewRequest.".php";
    }

}