<?php
class TemplateController{

    public function RequestViews($ViewRequest){
        return TemplateModel::Views($ViewRequest);
    }
}