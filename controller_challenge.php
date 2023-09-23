<?php
include("model_challenge.php");
include("model_office.php");
include("model_employee.php");
session_start();
if (!isset($_SESSION['challengelist'])) {
    $_SESSION['challengelist'] = array();
}

function createchallenge()
{
    $challenge = new model_challenge();
    $challenge->karyawan = $_POST['inputkaryawan'];
    $challenge->kantor = $_POST['inputoffice'];

    array_push($_SESSION['challengelist'], $challenge);
}

function getallchallenges()
{
    return $_SESSION['challengelist'];
}
function getallemployees()
{
    return $_SESSION['employeelist'];
}
function getalloffices()
{
    return $_SESSION['officelist'];
    var_dump($_SESSION['employeelist']);
}

if (isset($_POST['btn_register'])) {
    createchallenge();
    header("Location:view_challenge.php");
}

if (isset($_GET['deleteID'])) {
    deletechallenge($_GET['deleteID']);
    header("Location:view_challenge.php");
}

function deletechallenge($challengeindex)
{
    unset($_SESSION['challengelist'][$challengeindex]);
}
