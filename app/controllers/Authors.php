<?php

use Luracast\Restler\RestException;
use Luracast\Restler\Format\HtmlFormat;

class Authors {
    /**
     * Get all Authors
     *
     * return array {@type Author}
     *
     * @view authorView
     *
     */

    public function index(){
        return Author::all();
    }

//    public function get($id){
//        if(!$feedback = Author::find($id)){
//            throw new RestException(404, 'feedback not found');
//        }
//        return $feedback;
//    }



    public function delete($id){
        if(!$feedback = Authors::find($id)){
            throw new RestException(404, 'feedback not found');
        }
        $feedback->delete();
        return ['success'=>true];
    }

}