<?php

use Luracast\Restler\RestException;

class AuthorController {
    /**
     * Get all Authors
     *
     * return array {@type Author}
     */
    public function index(){
        return Author::all();
    }

    public function get($id){
        if(!$feedback = Author::find($id)){
            throw new RestException(404, 'feedback not found');
        }
        return $feedback;
    }

    public function post(Author $feedback){
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