<?php
include '../Model/DBConn.php';
function plsqldb1($acsId,$job){

    $conn = connection();
    $sql = 'BEGIN addIntoEmployeeTable.add_emp(:acsId, :job); END;';
    $stmt = oci_parse($conn,$sql);
    oci_bind_by_name($stmt,':acsId',$acsId,32);
    oci_bind_by_name($stmt,':job',$job,32);
    return oci_execute($stmt);
    
}

function plsqldb2($pid){

    $conn = connection();
    $sql = 'BEGIN deleteFromPaymentTable.del_payment(:pid); END;';
    $stmt = oci_parse($conn,$sql);
    oci_bind_by_name($stmt,':pid',$pid,32);
    return oci_execute($stmt);
    
}
function plsqldb3($bid,$pname,$cid,$budg){

    $conn = connection();
    $sql = 'BEGIN Insert_ReqProduct(:bid,:pname,:cid,:budg); END;';
    $stmt = oci_parse($conn,$sql);
    oci_bind_by_name($stmt,':bid',$bid,32);
    oci_bind_by_name($stmt,':pname',$pname,32);
    oci_bind_by_name($stmt,':cid',$cid,32);
    oci_bind_by_name($stmt,':budg',$budg,32);
    return oci_execute($stmt);
    
}
function plsqldb4($pmi,$pmn){

    $conn = connection();
    $sql = 'BEGIN addIntopaymentMethodTable.addpaymentMethod(:pmi, :pmn); END;';
    $stmt = oci_parse($conn,$sql);
    oci_bind_by_name($stmt,':pmi',$pmi,32);
    oci_bind_by_name($stmt,':pmn',$pmn,32);
    return oci_execute($stmt);
    
}
function plsqldb5($ai,$uap){

    $conn = connection();
    $sql = 'BEGIN UpdateAdminProfile.updateprofile(:ai, :uap); END;';
    $stmt = oci_parse($conn,$sql);
    oci_bind_by_name($stmt,':ai',$ai,32);
    oci_bind_by_name($stmt,':uap',$uap,32);
    return oci_execute($stmt);
    
}
function plsqldb6($Rp){

    $conn = connection();
    $sql = 'BEGIN deleteFromProduct.del_p(:Rp); END;';
    $stmt = oci_parse($conn,$sql);
    oci_bind_by_name($stmt,':Rp',$Rp,32);
    return oci_execute($stmt);
    
}
?>