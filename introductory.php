

<h2>Introductory Rites</h2>

<p>In the Name of the <? $sm->cross(); ?>Father, and of the Son, and of the Holy Spirit.</p>
<p><u>Amen.</u></u>
<?php
$sm->cite("Sarum p. 293");
$sm->ct_link(array());
?>


<p>The Lord be with you.</p>

<p><u>And with thy spirit.</u></p>



<!--
<p><i>(Some opening blessing will be inserted at this point.
It will either be something standard for every Mass,
or something that can be PHP-customized for each individual
Mass.)</i></p>
-->

<p><i>(The Penitential Act will come here.)</i></p>

<?php $sm->gt("Kyrie"); ?>

<p>Lord, have mercy upon us</p>
<p><u>Lord, have mercy upon us</u></p>
<p>Christ, have mercy upon us</p>
<p><u>Christ, have mercy upon us</u></p>
<p>Lord, have mercy upon us</p>
<p><u>Lord, have mercy upon us</u></p>
<?php
$sm->cite("Sarum p. 293");
$sm->ct_link(array());
?>



<?
// HERE STARTETH THE GLORIA



if ( $sn_mode_inf["allow-gloria"] ) {
  $sm->gt("Gloria");
  
  if ( $sn_mode_inf["gloria-notice"] )
  {
    $sm->note("The Gloria is ommitted during the seasons of Advent and Lent.");
  }
  $lngu->part("gloria-text");
}
// HERE ENDETH THE GLORIA
?>

<?php
$snt->set_var("part","collect");
$snt->by_toc($canonical . "/main.lsr",$act_cust_caln,true,true);
?>

