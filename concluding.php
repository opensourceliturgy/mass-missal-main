
<h2>Concluding Rites</h2>

<p>
<?php
$snt->set_var("part","postcmn");
$snt->patient();
$sfar = $snt->by_toc($canonical . "/main.lsr",$act_cust_caln,true,true);
$snt->urgent();
if ( !($sfar) )
{
  $sfar = $snt->by_toc($canonical . "/main.lsr","unassigned",true,true);
}
echo "\n";
?>
Through the same Christ, Our Lord.
</p>

<p><u>Amen.</u></p>

<p><i>
(More content will be added here later.)
</i></p>


