<?php

class ContactController extends \BaseController{

    public function index()
    {

        return "Index contact controller ";
    }

    public function create(){

        return "crear nuevo contacto";
    }

    public function edit($id)
    {
        return "editar el contacto ".$id;
    }

    public function update($id)
    {

    }

    public function destroy($id)
    {
        return "borrar contacto con id " . $id;

    }
}