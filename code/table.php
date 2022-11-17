<?php
require __DIR__ . '/vendor/autoload.php';

$client = new Google_Client();
$client->setApplicationName('Google Sheets in PHP');
$client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/credentials.json');

$service = new Google_Service_Sheets($client);

$spreadsheetId = '10PbvjpvTTQBku0xID-nhj9uKCIoTh7YCl0F8YQaBOpk';

$rangeH = 'A1:D1';
$dataH = [
    [
        'Category',
        'Email',
        'Title',
        'Description'
    ]
];
$valuesH = new Google_Service_Sheets_ValueRange([
    'values' => $dataH
]);

$optionsH = [
    'valueInputOption' => 'RAW'
];

$service->spreadsheets_values->update($spreadsheetId, $rangeH, $valuesH, $optionsH);

$folders = "categories";
$categories = scandir($folders);
$ind = 2;
foreach($categories as $category) {
    if (($category === '.') || ($category === '..')) {
        continue;
    }
    $categoryPath = "categories/{$category}";
    $emailsInCategory = scandir($categoryPath);
    foreach($emailsInCategory as $email) {
        if (($email === '.') || ($email === '..')) {
            continue;
        }
        $emailFolder = "categories/{$category}/{$email}";
        $advertisements = scandir($emailFolder);
        foreach($advertisements as $adv) {
            if (($adv === '.') || ($adv === '..')) {
                continue;
            }
            $advPath = "categories/{$category}/{$email}/{$adv}";
            $advFile = fopen($advPath, "r");
            $descr = file_get_contents($advPath);
            fclose($advFile);
            $rangeT = 'A'.$ind.':D'.$ind;
            $dataT = [
                [
                    $category,
                    $email,
                    substr($adv, 0, -4),
                    $descr
                ]
            ];
            $valuesT = new Google_Service_Sheets_ValueRange([
                'values' => $dataT
            ]);
            $optionsT = [
                'valueInputOption' => 'RAW'
            ];
            
            $service->spreadsheets_values->update($spreadsheetId, $rangeT, $valuesT, $optionsT);
            
            $response = $service->spreadsheets_values->get($spreadsheetId, $rangeT); // запись данных 
            var_dump($response->getValues());
            $ind++;
        }
    }
}
/* Лекция!
$range = 'A1:B1';
$data = [
    [
        'hello',
        'hello two'
    ]
];
$values = new Google_Service_Sheets_ValueRange([
    'values' => $data
]);

$options = [
    'valueInputOption' => 'RAW'
];
$spreadsheetId = '10PbvjpvTTQBku0xID-nhj9uKCIoTh7YCl0F8YQaBOpk';

$service->spreadsheets_values->update($spreadsheetId, $range, $values, $options);

// вытаскиваем данные из таблицы
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
var_dump($response->getValues());*/
?>

