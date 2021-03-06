--TEST--
Decimal128: Regular - Smallest with Trailing Zeros
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$bson = hex2bin('1800000013640040EF5A07000000000000000000002A3000');

// BSON to Canonical BSON
echo bin2hex(fromPHP(toPHP($bson))), "\n";

// BSON to Canonical extJSON
echo json_canonicalize(toJSON($bson)), "\n";

$json = '{"d" : {"$numberDecimal" : "0.00123400000"}}';

// extJSON to Canonical extJSON
echo json_canonicalize(toJSON(fromJSON($json))), "\n";

// extJSON to Canonical BSON
echo bin2hex(fromJSON($json)), "\n";

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
1800000013640040ef5a07000000000000000000002a3000
{"d":{"$numberDecimal":"0.00123400000"}}
{"d":{"$numberDecimal":"0.00123400000"}}
1800000013640040ef5a07000000000000000000002a3000
===DONE===