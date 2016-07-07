<?php

require_once $libdir . "/debug.php";
require $libdir . "/modes/default.php";
//if ( $customize )
//{
//  require $libdir . "/modes/mode-" . $cust_mode . ".php";
//}
include_array_files($preffile);

// So the lectionary won't bomb
//require_once $liturgidir . "/lecture-func.php";
require_once $libdir . "/symb.php";
require_once $libdir . "/lectionary_dialogue.php";
require_once $libdir . "/psalm_bridging.php";
require_once $liturgidir . "/oftheword/customs.php";
require_once $libdir . "/string_magic_res.php";
require_once $libdir . '/deferred_output.php';
require_once $libdir . '/language_tool.php';
$lct = new lectionary_dialogue;
$strmagic = new string_magic_res;
$credits = new deferred_output;
//$lct->inform("main",new lectionary_custom,$sm,
//new psalm_bridging,$strmagic);
$lct->inform("main",array(
  array("theme",$sm)
));

$lngu = new language_tool;
$lngu->init($langpath,$langpack);
$ttlng = new language_tool;
$ttlng->init($langpath,$langpack);
$ttlng->set_framing(array(
  'class_list' => array (
    array ( // 1st in Sequence
      'pray_css' => 'prayer_label',
      'pray_elm' => 'div',
      'sect_css' => 'section_label',
      'sect_elm' => 'div',
      'pray_pre' => '',
      'sect_pre' => '',
    ),
    array ( // 1st in Sequence
      'pray_css' => 'prayer_alt_label',
      'pray_elm' => 'span',
      'sect_css' => 'section_label',
      'sect_elm' => 'span',
      'pray_pre' => '',
      'sect_pre' => '',
    ),
    array ( // 1st in Sequence
      'pray_css' => 'prayer_alt_label',
      'pray_elm' => 'span',
      'sect_css' => 'section_label',
      'sect_elm' => 'span',
      'pray_pre' => "\n--\n",
      'sect_pre' => "\n--\n",
    ),
  ),
));



// And now let's similarly prepare for the Calendar
// of the Saints:
require_once $libdir . "/saint_calendar_dlg.php";
$snt = new saint_calendar_dlg;
$snt->inform("main",array(
  array("theme",$sm)
));
$act_cust_caln = $cust_caln;
if ( !($customize) ) { $act_cust_caln = "test"; }




?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<? include_array_files($headfile); ?>
<?php require_once(realpath($libdir . '/js/stdjs.php')); ?>
</head>
<body>
<div class = "pageframe">



<?php require $liturgidir . "/redtp/copyright.php"; ?>

<?php
if ( $customize )
{
  require $liturgidir . "/about-today.php";
}
?>

<?php require $liturgidir . "/introductory.php"; ?>
<?php require $liturgidir . "/oftheword.php"; ?>
<?php require $liturgidir . "/eucharist.php"; ?>
<?php require $liturgidir . "/communion.php"; ?>
<?php require $liturgidir . "/concluding.php"; ?>

<?php $sm->flushnotes(); ?>

<?php require $liturgidir . "/redtp/credits.php"; ?>

</div>
</body>
</html>
