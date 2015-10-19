<?php


class Siteconfig{
//site salt
static public $salt = 'sdjfgjhdfk919991';
//Session Varibales



public function __construct() {

}

public function check_login()
{

    $set_data = $this->session->all_userdata();

    if (isset($set_data['username']) && $set_data['username'] == NULL) {
        return FALSE;
    } else {
        return $set_data;
    }
}
}