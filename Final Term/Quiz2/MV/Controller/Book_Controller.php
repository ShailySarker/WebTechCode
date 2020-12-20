<?php

require_once "../Model/Books_Database_Connection.php";

function getAllBook()
{
    $queryAllBook = "select * from books";
    $data = getValues($queryAllBook);
    return $data;
}

function getBookDetail($id)
{
    $queryBookDetail = "select * from books where ID = '" . $id . "';";
    $data = getValues($queryBookDetail);
    return $data;
}


function getSearchBook($BookName)
{
    $querySearchBook = "SELECT * FROM books WHERE Name like '%" . $BookName . "%';";
    $data = getValues($querySearchBook);
    return $data;
}