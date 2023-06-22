<?php
$pdfUrl = "https://www.gujarattoday.in/wp-content/uploads/2023/06/GUJARATTODAY-E-PAPER-20-JUNE-2023.pdf";

if (isGoogleDocsUrl($pdfUrl)) {
    $pdfUrl = extractPdfUrlFromGoogleDocs($pdfUrl);
}

$outputPath = dirname(__FILE__, 2) . "/pdftoimages/image-%03d.png";

$resolution = 300; // Adjust the resolution as needed

$command = "convert -density $resolution $pdfUrl -flatten -colorspace RGB -quality 100 $outputPath";
exec($command, $output, $returnCode);

if ($returnCode === 0) {
    echo "PDF pages converted to images successfully.";
} else {
    echo "Error converting PDF to images.";
    print_r($output);
}

function isGoogleDocsUrl($url)
{
    return strpos($url, 'https://docs.google.com/viewerng/viewer?url=') === 0;
}

function extractPdfUrlFromGoogleDocs($url)
{
    $urlParts = parse_url($url);
    parse_str($urlParts['query'], $query);

    return urldecode($query['url']);
}
