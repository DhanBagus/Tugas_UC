<?php
include("model_employee.php");
session_start();
if (!isset($_SESSION['employeelist'])) {
    $_SESSION['employeelist'] = array();
}

function createemployee()
{
    $employee = new model_employee();
    $employee->nama = $_POST['inputnama'];
    $employee->jabatan = $_POST['inputjabatan'];
    $employee->umur = $_POST['inputumur'];
    array_push($_SESSION['employeelist'], $employee);
}

function getallemployees()
{
    return $_SESSION['employeelist'];
}

if (isset($_POST['btn_register'])) {
    createemployee();
    header("Location:view_employee.php");
}

if (isset($_GET['deleteID'])) {
    deleteemployee($_GET['deleteID']);
    header("Location:view_employee.php");
}

function deleteemployee($employeeindex)
{
    unset($_SESSION['employeelist'][$employeeindex]);
}
