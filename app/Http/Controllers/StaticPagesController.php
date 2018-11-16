<?php

namespace App\Http\Controllers;

//when you want something from another folder start with 'use'

class StaticPagesController extends Controller
{
    //create a function where people go to the home page
    public function getHome()
    {
        # normaly you proces something here like variables or paramaters
        # or talk to the model
        # receive data back from the model
        # update the database
        # compile or proces the data from the model again if needed
        # pass the data to the correct view

#        return "Hallo homepage";
        return view ('pages.home');
    }
//when someone goes to the registerpage do this function
    public function getRegister()
    {
#        return "Hallo registerpage";
        return view ('pages.register');
    }
//when someone goes to the loginpage do this function
    public function getLogin()
    {
#        return "Hallo loginpage";
        return view ('pages.login');
    }
//when someone goes to the Resetpage do this function
    public function getReset()
    {
#        return "Hallo resetpage";
        return view ('pages.reset');
    }
    public function getCreate()
    {
#        return "Hallo createpage";
        return view ('pages.create');
    }

//when someone submits the loginpage do this function
    public function postLogin()
    {

    }
//when someone submits the registerpage do this function
    public function postRegister()
    {

    }
//when someone submits the resetpage do this function
    public function postReset()
    {

    }
}

?>
