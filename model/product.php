<?php
function getAllProductBestSeller(){
    $sql='select * from sach order by luotban';
    return getAll($sql);
}

function getLimitProductBestSeller($n){
    $sql='select * from sach order by luotban limit '.$n;
    return getAll($sql);
}
?>