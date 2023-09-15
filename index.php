<table border=2><tr>
<?php

    $MAX = 90 ;
    for( $i=1; $i<=$MAX; $i++) {
        print "\t<td>" . "<td>" . $i . "</td>\r\n" ;
        if( $i%10==0 && $i<$MAX ) 
        print "</tr>\r\n <tr>\r\n" ;
    }
?>
</tr>
</table>

<hr>

<table border=2>
<?php

    if (isset ($_GET['s']) ) $s = $_GET['s'] ;
    if ( !($s>1 && $s<=25) ) $s = 10 ;

    if (isset ($_GET['o']) ) $o = $_GET['o'] ;
    if ( !($o>1 && $o<=25) ) $o = 10 ;

    for ( $i=1; $i<=$s; $i++ ){
        print "<tr>";
        for ( $j=1; $j<=$o; $j++ ){
            print "<td title='$i*$j'>" . $i*$j . "</td>" ;
        } 
        print "</tr>";
    }
?>
</table>

