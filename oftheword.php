
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

<?php $lngu->part("pray-nicene-creed"); ?>


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






