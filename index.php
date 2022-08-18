<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <?php
    $open = fopen("subscriptions.csv", "r");
    $counter = 0;
    $modifyed_data = [];

    if ($open !== FALSE) {

        while (($data = fgetcsv($open, ",")) !== FALSE) {
            $array[] = $data;
            // $row = $array[$counter][2];

            switch ($array[$counter][2]) {
                case '1':
                    $array[$counter][2] = "Categories Tree Menu for Virtuemart (Pro)";
                    $modifyed_data[$counter][] = $array[$counter][2];
                    break;
                case '2':
                    $array[$counter][2] = "Categories Tree Menu for Virtuemart (Basic)";
                    $modifyed_data[$counter][] = $array[$counter][2];
                    break;
                case '3':
                    $array[$counter][2] = "Categories Treeview for K2 (Basic)";
                    $modifyed_data[$counter][] = $array[$counter][2];
                    break;
                case '4':
                    $array[$counter][2] = "Categories Treeview for K2 (Pro)";
                    $modifyed_data[$counter][] = $array[$counter][2];
                    break;
                case '5':
                    $array[$counter][2] = "Multiple Extra Fields Groups (MEFG)";
                    $modifyed_data[$counter][] = $array[$counter][2];
                    break;
                case '6':
                    $array[$counter][2] = "Memory Limit Plugin";
                    $modifyed_data[$counter][] = $array[$counter][2];
                    break;
                case '7':
                    $array[$counter][2] = "Categories Treeview theme for Zoo Category";
                    $modifyed_data[$counter][] = $array[$counter][2];
                    break;
                case '8':
                    $array[$counter][2] = "AutoMeta for K2";
                    $modifyed_data[$counter][] = $array[$counter][2];
                    break;
                case '9':
                    $array[$counter][2] = "K2 Bundle";
                    $modifyed_data[$counter][] = $array[$counter][2];
                    break;
                case '10':
                    $array[$counter][2] = "Chained Fields for K2";
                    $modifyed_data[$counter][] = $array[$counter][2];
                    break;
                case '11':
                    $array[$counter][2] = "Datasets for K2";
                    $modifyed_data[$counter][] = $array[$counter][2];
                    break;
                case '12':
                    $array[$counter][2] = "JEDStatsPro Bronze";
                    $modifyed_data[$counter][] = $array[$counter][2];
                    break;
                case '13':
                    $array[$counter][2] = "JEDStatsPro Silver";
                    $modifyed_data[$counter][] = $array[$counter][2];
                    break;
                case '14':
                    $array[$counter][2] = "JJEDStatsPro Gold";
                    $modifyed_data[$counter][] = $array[$counter][2];
                    break;
                case '15':
                    $array[$counter][2] = "JEDStatsPro Platinum";
                    $modifyed_data[$counter][] = $array[$counter][2];
                    break;
                case '16':
                    $array[$counter][2] = "JR Maps For K2";
                    $modifyed_data[$counter][] = $array[$counter][2];
                    break;
                default:
                    # code...
                    break;
            }

            $counter++;
        }
        // EXPORT CSV
        $fp = fopen('newSubscribers.csv', 'w');
        foreach ($modifyed_data as $rows) {
            fputcsv($fp, $rows);
        }
        fclose($fp);
        fclose($open);
    }

    //echo $array[$counter][2];
    echo "<pre>";
    //To display array data
    var_dump($array);
    echo "</pre>";


    ?>


</body>

</html>