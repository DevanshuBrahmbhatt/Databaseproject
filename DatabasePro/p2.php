<?php

$pdf_file = 'a.pdf';

if (!is_readable($pdf_file)) {
        print("Error: file does not exist or is not readable: $pdf_file\n");
        return;
}

$c = curl_init();

$cfile = curl_file_create($pdf_file, 'application/pdf');

$apikey = 'i7qq50c4uelg'; // from https://pdftables.com/api
echo "$apikey";

curl_setopt($c, CURLOPT_URL, "https://pdftables.com/api?key=i7qq50c4uelg&format=xslx-single");


curl_setopt($c, CURLOPT_POSTFIELDS, array('file' => $cfile));

curl_setopt($c, CURLOPT_RETURNTRANSFER, true);

curl_setopt($c, CURLOPT_FAILONERROR,true);

curl_setopt($c, CURLOPT_ENCODING, "gzip,deflate");

$result = curl_exec($c);


if (curl_errno($c) > 0) {
    print('Error calling PDFTables: '.curl_error($c).PHP_EOL);
} else {
  // save the CSV we got from PDFTables to a file
    file_put_contents ($pdf_file . ".xslx", $result);
}

curl_close($c);

?>
