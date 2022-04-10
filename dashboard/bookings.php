<?php

$uname=$_SESSION["userUid"];

$sql2 = "SELECT * FROM booktable WHERE bookName = '$uname'";  

$result = $conn->query($sql2);
$sno = 1;
$k=0;

while($row = $result->fetch_assoc())
{   
    $k=1;
    echo '<tr>
    <td>'.$sno.'</td>
    <td>'.$row['bookDate'].'</td>
    <td>'.$row['bookTime'].'</td>
    <td>'.$row['bookSeat'].'</td>';

    $sdate = str_replace('/', '-', $row['bookDate']);
    $d=strtotime($sdate);
    $dn=strtotime(date("d-m-Y"));
    
    if ($d < $dn)
    {
        if($row['bstatus']==0)
        {
            $sql3 = "UPDATE booktable SET bstatus = '1' WHERE bookId = '".$row['bookId']."'";
            $conn->query($sql3);
        }
        echo '<td><img src="./img/tick.png" height="20px" width="20px"></td></tr>';
    }
    else
    {
        echo '<td><img src="./img/cross.png" height="20px" width="20px"></td></tr>';
    }
    $sno = $sno + 1;
}

if($k==0)
    echo '<tr><td colspan="5" style="text-align: center;"><b>NO BOOKINGS</b></td></tr>';

?>