<?php

/**
 * Description of UserController
 *
 * @author xendor
 */
class UserController extends BaseController {
    
    public function getIndex()
    {
        return View::make('user_index', 
                array('user' => 
                    array(
                        "name" => "Jose",
                        "lastname" => "Bonfil",
                        "wage" => 100000)));
    }
    
    
    public function showProfile( $id )
    {        
        
    }
}