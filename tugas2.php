<?php
$r = 28;
$t =40;
$phi = 22/7;
function volumekerucut ($r,$t,$phi) {
    return (1/3*($phi*$r*$r*$t));
}
echo "volume kerucut tersebu adalah =" .volumekerucut($r,$t,$phi). "cm";
?>