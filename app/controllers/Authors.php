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

    public function get($id){
        if(!$feedback = Author::find($id)){
            throw new RestException(404, 'feedback not found');
        }
        return $feedback;
    }

    /**
     * Post name and email
     *
     * @param string $_name {@from path}
     * @param string $_email {@from path}
     *
     *
     * return array {@type Author}
     *
     */
    public function post($_name,$_email){
        $auth=new Author;
        $auth->name=$_name;
        $auth->email=$_email;
        $auth->save();
//        return $auth;

    }

    public function delete($id){
        if(!$feedback = Authors::find($id)){
            throw new RestException(404, 'feedback not found');
        }
        $feedback->delete();
        return ['success'=>true];
    }

}