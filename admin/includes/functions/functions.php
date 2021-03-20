<?php

/*
** Check Items Function v1.0
** Function To Check Items  In Database [ Function Accepted Parameters]
** $select = The Item To select
** $from = The Table To select
** $value = The Value Of select
*/

function checkItem($select ,  $from , $value){

    global $con;

    $statment = $con->prepare("SELECT $select FROM $from WHERE $select = ?");

    $statment->execute(array($value));

    $count = $statment->rowCount();
    
    return $count;
}