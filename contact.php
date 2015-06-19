<?php
# Send correct headers
header('Content-type: text/x-vcard; charset=utf-8');
// Alternatively: application/octet-stream

$foo = <<<'EOD'
BEGIN:VCARD
VERSION:3.0
FN:Omkar Tapale
N:Tapale;Omkar;;;
EMAIL;TYPE=INTERNET:omkar_tapale@live.com
X-SKYPE:omkartapale
TEL;TYPE=CELL:9890662354
ADR;TYPE=HOME:;;#588\, Sali Ali\, Ozarde;Wai;Maharashtra;412803;India
item1.URL:http\://www.omkartapale.in
item1.X-ABLabel:_$!<HomePage>!$_
item2.URL:https\://plus.google.com/+OmkarTapale
item2.X-ABLabel:PROFILE
item3.URL:http\://twitter.com/omkartapale
item3.X-ABLabel:Twitter
END:VCARD
EOD;

header('Content-Disposition: attachment; filename="contact.vcf"');
header("Content-Length: " .strlen($foo) );

# Output file contents
echo $foo; 

exit();

?>