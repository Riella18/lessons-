<?php
// Number of rows and columns
$rows = 10;

// Create an HTML string for the multiplication table
$html = "<table border='1'>\n";
$html .= "<tr><th>Number 1</th><th>Number 2</th><th>Result</th></tr>\n";

// Generate table rows
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $rows; $j++) {
        $result = $i * $j;
        $html .= "<tr><td>{$i}</td><td>{$j}</td><td>{$result}</td></tr>\n";
    }
}

$html .= "</table>";

// Load the HTML into a DOMDocument object
$dom = new DOMDocument;
@$dom->loadHTML($html);

// Create an XPath object
$xpath = new DOMXPath($dom);

// Extract table rows
$rows = $xpath->query('//table/tr');

// Find the maximum width for each column
$columnWidths = [0, 0, 0];
foreach ($rows as $row) {
    $cols = $xpath->query('td | th', $row);
    foreach ($cols as $index => $col) {
        $columnWidths[$index] = max($columnWidths[$index], strlen(trim($col->nodeValue)));
    }
}

// Function to format text with padding
function formatText($text, $width) {
    return str_pad($text, $width + 2, ' ', STR_PAD_BOTH);
}

// Loop through each row and print the content with padding
foreach ($rows as $row) {
    $cols = $xpath->query('td | th', $row);
    $rowText = [];
    foreach ($cols as $index => $col) {
        $rowText[] = formatText(trim($col->nodeValue), $columnWidths[$index]);
    }
    echo implode('', $rowText) . "\n";
}
?>
