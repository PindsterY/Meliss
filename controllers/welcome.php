<?php

class welcome extends Controller
{
    public $requires_auth = false;

    function index()
    {
        $this->users = get_all("SELECT * FROM user");
    }

    function AJAX_index()
    {

    }

    function POST_index()
    {

    }
}