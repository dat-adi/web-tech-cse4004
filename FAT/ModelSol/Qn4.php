<?php
$lines=file( "Clubs.txt" );
$fp1 = fopen('Technical.txt', 'a');
$fp2 = fopen('Others.txt', 'a');
foreach( $lines as $line ){
    $data = explode(" ", $line);
    $temp = $data;
    $type = end($temp);
    echo $type."<br>";
    $nxt = current($data); 
    if($type =="Technical"){
        foreach( $data as $word ){ 
            if($nxt != $type){
                echo $nxt."<br>";
                fwrite($fp1,$nxt." ");
                $nxt=next($data);
            }
        }
        fwrite($fp1,"\n");
        echo "Technical club added".$type."<br>";
    }
    else {
        foreach( $data as $word ){ 
            if($nxt != $type){
                echo $nxt."<br>";
                fwrite($fp2,$nxt." ");
                $nxt=next($data);
            }
        }
        fwrite($fp2,"\n");
        echo "Non Technical club added".$type."<br>";
    }
}
?>
