<?
require_once $libdir . "/symbos/symb_res.php";
class lectionary_custom {

protected $vr_init = false;
protected $rob_sym;

protected $vr_info;

protected function prv_init ( ) {
  if ( $vr_init ) { return; }
  $this->rob_sym = new symb_res;
  
  $vr_init = true;
}

function ebuf ( $rg_a )
{
  $this->vr_info = $rg_a;
}

function ot_before ( )
{
  return "\n<p>A reading from the " .
    $this->vr_info["bigname"] . "</p>\n";
  ;
}

function ot_after ( )
{
  $rt = "\n<p><b>--------</b></p>\n";
  $rt .= "<p>Here endeth the lesson.</p>\n";
  
  $rt .= "<p><u>Blessed art Thou, My Lord, who Reveals\n";
  $rt .= "Himself to the Nations.</u></p>\n";
  return $rt;
}

function nt_before ( )
{
  return "\n<p>A reading from the " .
    $this->vr_info["bigname"] . "</p>\n";
  ;
}

function nt_after ( )
{
  $rt = "\n<p><b>--------</b></p>\n";
  $rt .= "<p>Here endeth the lesson.</p>\n";
  
  $rt .= "<p><u>Blessed art Thou, My Lord, who Reveals\n";
  $rt .= "Himself to the Nations.</u></p>\n";
  return $rt;
}

function gospel_before ( )
{
  $rt = "\n<p>Stand for the reading of the " .
    $this->vr_info["bigname"] . " and hear the" .
    " Good News of Our Lord.</p>\n";
  $rt .= "<p><u>Blessed art Thou, Oh Lord.</u></p>\n";
  return $rt;
}

function gospel_after ( )
{
  $rt = "\n<p><b>--------</b></p>\n";
  $rt .= "<p>And this is the Gospel of Our Lord.</p>\n";
  
  $rt .= "<p><u>Blessed art Thou, Oh Lord, Jesus Christ.</u></p>\n";
  return $rt;
}

public function aleluia ( ) {
  $rt .= "\n<p>Aleluia. Aleluia. Aleluia.</p>\n";
  $rt .= "\n<p><u>Aleluia. Aleluia. Aleluia.</u></p>\n";
  $rt .= $this->maychange("This is a temporary form of the Aleluia.");
  return $rt;
}

public function psalm_before ( ) {
  return "";
}

public function psalm_after ( ) {
  $this->prv_init();
  $rt = "\n";
  $rt .= "<p>-</p>";
  $rt .= "<p>Glory be to the " . $this->rob_sym->cross() . "Father and to the Son and to the Holy Spirit.</p>\n";
  $rt .= "<p><u>As it was in the beginning, is now and ever shall be,\n";
  $rt .= "world without end.</u></p>\n";
  $rt .= "<p><u>Amen.</u></p>\n";
  $rt .= "<p>-</p>";
  return $rt;
}

protected function maychange ( $rg_why )
{
  $rt .= "\n<p><font size = \"-2\"><i>(";
  $rt .= "This text is subject to possible";
  $rt .= " change because:\n";
  $rt .= htmlspecialchars($rg_why);
  $rt .= ")</i></font></p>\n";
  return $rt;
}



} ?>