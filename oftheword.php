
<?php $sm->parthead("Liturgy of the Word"); ?>

<?php


if ( $customize ) { $lct->set_var("lectpage", $cust_lect); }
else { $lct->set_var("lectpage","generic-missal"); }
$lct->set_var("scriptres", $scriptura);
$lct->set_var("psalms", $psalmsres);
$lct->by_toc($locuta . "/main.lsr", true);

?>

<p><i>(This is where the homily will come if there is one to deliver.)</i></p>


<?php $lct->may_floor(0); $lct->flushy(); ?>


<?php $sm->t("The Creed"); ?>


<p>Together, let us proclaim our faith.</p>

<?php $sm->note("The term \"Apostolic\" as it appears in the Creed is not a reference to Apostolic Succession, but to Apostolic Tradition."); ?>

<p><u>I believe in one God the Almighty Father creator of heaven and earth and of everything visible and invisible.</u></p>
<p><u>And I believe in one Lord Jesus Christ the only son of God, born of the Father before all ages,</u></p>
<p><u>God of God, Light of light, true God of true God,</u></p>
<p><u>Of One Being with the Father, by Whom all things where made.</u></p>
<p><u>Who came down from heaven for us to save us - and for that purpose He was conceived through the power of Holy Spirit and born of the Virgin Mary and became Man.</u></p>
<p><u>He was also  crucified for us under Pontius Pilate, and suffered death and was buried;</u></p>
<p><u>On the third day He rose again, as it is written in the scriptures,</u></p>
<p><u>And ascended into heaven and is seated at the right hand of the Father,</u></p>
<p><u>And He shall return in glory to judge the living and the dead and His kingdom shall be endless.</u></p>
<p><u>And I believe in the Holy Spirit, Lord and life-giver, who proceeds from the Father,</u></p>
<p><u>Together with the Father and the Son She is worshipped and glorified.</u></p>
<p><u>She has spoken through the prophets.</u></p>
<p><u>And I believe in One holy Catholic and Apostolic Church, I confess one baptism for the forgiveness of sins, I look forward to the resurrection of the dead and the life in the world  to come.</u></p>
<p><u>Amen!</u></p>
<?php
$sm->cite("The translation of the Creed used here was translated from the Greek");
$sm->cite(" by Brother Andrew - and then he and I, together, hammered");
$sm->cite(" out the final details.");
$sm->ct_link(array()); ?>

<?php $sm->xt(); ?>



<?php
$sm->t("Prayers of the Faithful");

$sm->insparg("All specific prayers of the faithful are gone through at
this point -- beginning with those that have been prepared in advance
(offered by the lector, who may or may not be the same person as the
clebrant) and then followed by additional prayers offered by anyone
who's present.
<br/><br/>
Every time someone offers a prayer, that persons concludes the
prayer with the words &quot;We pray to the Lord&quot; -
which is the cue by which
all who are present know
to affirm that prayer
with the words &quot;<u>Lord, hear our prayer!</u>&quot;.
<br/><br/>
When all that is done - the <b>celebrant</b> resumes the lead as
the following concludes this section
of the liturgy ---");

?>

<p>
And for all the prayers of our hearts,
even those which we did not vocalize -
and for all those we should be praying
for but have forgotten to mention -
we pray to the Lord.
</p>

<p><u>Lord, hear our prayer!</u></p>






