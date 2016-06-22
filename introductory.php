

<h2>Introductory Rites</h2>

<p>In the Name of the <? $sm->cross(); ?>Father, and of the Son, and of the Holy Spirit.</p>
<p><u>Amen.</u></u>
<!-- Sarum p. 293 -->


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
<!-- Sarum p. 293 -->



<?
// HERE STARTETH THE GLORIA



if ( $sn_mode_inf["allow-gloria"] ) {
  $sm->gt("Gloria");
  
  if ( $sn_mode_inf["gloria-notice"] )
  {
    $sm->note("The Gloria is ommitted during the seasons of Advent and Lent.");
  }
  ?>
<p><u>
Glory be to God on high,
and on earth, peace to men of good will.
We praise thee; we bless thee;
we adore thee;
we glorify thee.
We give thee thanks for thy great glory, O Lord God,
heavenly King,
God the Father Almighty,
O Lord Jesus Christ,
the only begotten Son.
O Lord God, Lamb of God,
Son of the Father,
who takest away the sins
of the world,
have mercy on us.
Who takest away the sins
of the world,
receive our prayers.
Who sittest at the right hand of the
Father,
have mercy on us.
For thou only art holy.
Thou only art the Lord.
Thou only, O Jesus Christ,
together with the Holy Spirit,
art most high in the glory of God the Father.
</u></p>

<p><u>Amen.</u></p>
<?php
}
// HERE ENDETH THE GLORIA
?>

<!-- Source of the Gloria is:
http://ia700200.us.archive.org/1/items/a550137400unknuoft/a550137400unknuoft.pdf page 29

Home-page of the document (in multiple formats is):
http://archive.org/details/a550137400unknuoft
-->

<?php
$snt->set_var("part","collect");
$snt->by_toc($canonical . "/main.lsr",$act_cust_caln,true,true);
?>

