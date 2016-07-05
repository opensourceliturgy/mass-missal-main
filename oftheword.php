<p class = "section_label" dir = "ltr">Liturgy of the Word</p>
<!-- $sm->parthead("Liturgy of the Word"); -->



<?php if ( !$customize ) { require(realpath(__DIR__ . '/sample-of-word-a.php')); } ?>

<p class = "instruction">This is where the homily will come if there is one to deliver.</p>
<p class = "instruction">At this point, the Preacher cedes the floor to the Celebrant.</p>


<?php
if ( $ttlng->part("title/the-creed") ) { ?>
<p class = "prayer_label" dir = "ltr">The Creed</p>
<?php }
$lngu->part("pray-nicene-creed");



if ( $ttlng->part("title/of-the-faithful") ) { ?>
<p class = "prayer_label" dir = "ltr">Prayers of the Faithful</p>
<?php }

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






