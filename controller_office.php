<?php
include("model_office.php");
session_start();
if (!isset($_SESSION['officelist'])) {
    $_SESSION['officelist'] = array();
}

function createoffice()
{
    $office = new model_office();
    $office->nama = $_POST['inputnama'];
    $office->alamat = $_POST['inputalamat'];
    $office->kota = $_POST['inputkota'];
    $office->phone = $_POST['inputphone'];
    array_push($_SESSION['officelist'], $office);
}

function getalloffices()
{
    return $_SESSION['officelist'];
}

if (isset($_POST['btn_register'])) {
    createoffice();
    header("Location:view_office.php");
}

if (isset($_GET['deleteID'])) {
    deleteoffice($_GET['deleteID']);
    header("Location:view_office.php");
}

function deleteoffice($officeindex)
{
    unset($_SESSION['officelist'][$officeindex]);
}
