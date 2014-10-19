<!--Wellesley Arreza
wra216
CSE 297 – Web Application Development – Spring 2014
Homework Assignment 6 
Task Manager
Due Wednesday, March 26th-->

<?php
session_start();

include 'Action.php';
include 'InventoryDAO.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Action_Add.php that contains the logic for executing the Add action

class Action_Add implements Action {

    public function execute($request) {
        $perPage = 0;
        $count = 0;
        $start = 0;
        $dao = new InventoryDAO();
        $btn = $request->get("mydropdown"); //$Btn corresponds to the dropdown list
        $description=$request->get("Description"); // $des corresponds to the description.
        $type=$request->get("mydropdown");
        $date=$request->get("datedue");
        $add=$request->get("add");
        $type=$type . " ". $add;
        $dao->update($title, $quantity);
       
        header("Location: Action_Display.php");
    }

}    

