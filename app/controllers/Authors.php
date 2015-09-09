<?php

use Luracast\Restler\RestException;

class Authors {
    /**
     * Get all Authors
     *
     * return array {@type Authors}
     */
    public function index(){
        return Authors::all();
    }

    public function get($id){
        if(!$feedback = Authors::find($id)){
            throw new RestException(404, 'feedback not found');
        }
        return $feedback;
    }

    public function post(Authors $feedback){
        $feedback->save();
        return $feedback;
    }

    public function delete($id){
        if(!$feedback = Authors::find($id)){
            throw new RestException(404, 'feedback not found');
        }
        $feedback->delete();
        return ['success'=>true];
    }

}