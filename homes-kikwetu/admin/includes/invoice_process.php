<?php
session_start();

    include('connections1.php');
    include('functions1.php');

    $invoice_date = date("Y-M-d");

    if(isset($_POST["invoicing"])){
        $tenid = $_POST["intenantid"];
        $payamount = $_POST["payamount"];
        $transid = $_POST["transid"];
        $invid = $_POST["invid"];
        $rent = $_POST["rentcost"];

        $bal = $rent - $payamount;
    


        $query29 = "INSERT into invoice (tenant_id, transaction_id, invoice_number, balance, date_made) values ('$tenid', '$transid', '$invid', '$bal', '$invoice_date')";
        $res40 = mysqli_query($conn, $query29);

        if($res40 === TRUE){
            header("Location: ../aa_invoicetenant.php?id=$tenid");
        }

        header("Location: ../aa_invoicetenant.php?id=$tenid");
}

