<?php

class TemplateModel{

    public function Views($ViewRequest){
        if($ViewRequest != null)
        return "./Views/".$ViewRequest.".php";
    }

}