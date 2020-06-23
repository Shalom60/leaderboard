<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>

<?php
            
            // Read JSON file
            $json = file_get_contents('data.json');
            $data_json = json_decode($json, true);

            // Find the first
            $point1 = 2;
            foreach ($data_json as $key1 => $value1) {
                if($data_json[$key1]["Total Points"] > $point1){
                    $name1 = $data_json[$key1]['Full Name'];
                    $username1 = $data_json[$key1]['Username'];
                    $email1 = $data_json[$key1]['Email'];
                    $point1 = $data_json[$key1]["Total Points"];
                }
            }
            // Find the second
            $point2 = 0;
            foreach ($data_json as $key1 => $value1) {
                if ($data_json[$key1]['Email'] != $email1) {
                    if($data_json[$key1]["Total Points"] > $point2){
                        $name2 = $data_json[$key1]['Full Name'];
                        $username2 = $data_json[$key1]['Username'];
                        $email2 = $data_json[$key1]['Email'];
                        $point2 = $data_json[$key1]["Total Points"];
                    }
                }
                
            }
            // Find the third
            $point3 = 0;
            foreach ($data_json as $key1 => $value1) {
                if ($data_json[$key1]['Email'] != $email1 and $data_json[$key1]['Email'] != $email2) {
                    if($data_json[$key1]["Total Points"] > $point3){
                        $name3 = $data_json[$key1]['Full Name'];
                        $username3 = $data_json[$key1]['Username'];
                        $email3 = $data_json[$key1]['Email'];
                        $point3 = $data_json[$key1]["Total Points"];
                    }
                }
                
            }

$point4 = 0;
foreach ($data_json as $key1 => $value1) {
    if ($data_json[$key1]['Email'] != $email1 and $data_json[$key1]['Email'] != $email2 and  $data_json[$key1]['Email'] != $email3)  {
        if($data_json[$key1]["Total Points"] > $point4){
            $name4 = $data_json[$key1]['Full Name'];
            $username4 = $data_json[$key1]['Username'];
            $email4 = $data_json[$key1]['Email'];
            $point4 = $data_json[$key1]["Total Points"];
        }
    }

}

$point5 = 0;
foreach ($data_json as $key1 => $value1) {
    if ($data_json[$key1]['Email'] != $email1 and $data_json[$key1]['Email'] != $email2 and  $data_json[$key1]['Email'] != $email3 and $data_json[$key1]['Email'] != $email4)  {
        if($data_json[$key1]["Total Points"] > $point5){
            $name5 = $data_json[$key1]['Full Name'];
            $username5 = $data_json[$key1]['Username'];
            $email5 = $data_json[$key1]['Email'];
            $point5 = $data_json[$key1]["Total Points"];
        }
    }

}

$point6 = 0;
foreach ($data_json as $key1 => $value1) {
    if ($data_json[$key1]['Email'] != $email1 and $data_json[$key1]['Email'] != $email2 and  $data_json[$key1]['Email'] != $email3 and $data_json[$key1]['Email'] != $email4 and $data_json[$key1]['Email'] != $email5)  {
        if($data_json[$key1]["Total Points"] > $point6){
            $name6 = $data_json[$key1]['Full Name'];
            $username6 = $data_json[$key1]['Username'];
            $email6 = $data_json[$key1]['Email'];
            $point6 = $data_json[$key1]["Total Points"];
        }
    }

}
        ?>

    <table class="content-table">
        <tr>
            <th>
                <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fa fa-align-justify"></i>
            </label>
            <ul>
                <li><a href="#">Update Users</a></li>
                <li><a href="#">Share</a></li>
                <li><a href="#">New Administrator</a></li>
            </ul>
            </th>
            <th>Full Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Total Points</th>
        </tr>
        <?php
        echo '<tr style="background-color: blue;">';
            echo '<td>1</td>';
            echo '<td>'.$name1.'</td>';
            echo '<td>'.$username1.'</td>';
            echo '<td>'.$email1.'</td>';
            echo '<td>'.$point1.'</td>';
        echo '</tr>';
        echo '<tr style="background-color: tomato;">';
            echo '<td>2</td>';
            echo '<td>'.$name2.'</td>';
            echo '<td>'.$username2.'</td>';
            echo '<td>'.$email2.'</td>';
            echo '<td>'.$point2.'</td>';
        echo '</tr>';
        echo '<tr style="background-color: yellow;">';
            echo '<td>3</td>';
            echo '<td>'.$name3.'</td>';
            echo '<td>'.$username3.'</td>';
            echo '<td>'.$email3.'</td>';
            echo '<td>'.$point3.'</td>';
        echo '</tr>';

        echo '<tr style="background-color: grey;">';
        echo '<td>4</td>';
        echo '<td>'.$name4.'</td>';
        echo '<td>'.$username4.'</td>';
        echo '<td>'.$email4.'</td>';
        echo '<td>'.$point4.'</td>';
        echo '</tr>';

        echo '<tr style="background-color: grey;">';
        echo '<td>5</td>';
        echo '<td>'.$name5.'</td>';
        echo '<td>'.$username5.'</td>';
        echo '<td>'.$email5.'</td>';
        echo '<td>'.$point5.'</td>';
        echo '</tr>';

        echo '<tr style="background-color: grey;">';
        echo '<td>6</td>';
        echo '<td>'.$name6.'</td>';
        echo '<td>'.$username6.'</td>';
        echo '<td>'.$email6.'</td>';
        echo '<td>'.$point6.'</td>';
        echo '</tr>';


        echo '<tr style="background-color: grey;">';
        echo '<td>7</td>';
        echo '<td>'.$name6.'</td>';
        echo '<td>'.$username6.'</td>';
        echo '<td>'.$email6.'</td>';
        echo '<td>'.$point6.'</td>';
        echo '</tr>';

        echo '<tr style="background-color: grey;">';
        echo '<td>8</td>';
        echo '<td>'.$name3.'</td>';
        echo '<td>'.$username3.'</td>';
        echo '<td>'.$email3.'</td>';
        echo '<td>'.$point3.'</td>';
        echo '</tr>';

        echo '<tr style="background-color: grey;">';
        echo '<td>9</td>';
        echo '<td>'.$name3.'</td>';
        echo '<td>'.$username3.'</td>';
        echo '<td>'.$email3.'</td>';
        echo '<td>'.$point3.'</td>';
        echo '</tr>';

        echo '<tr style="background-color: grey;">';
        echo '<td>10</td>';
        echo '<td>'.$name3.'</td>';
        echo '<td>'.$username3.'</td>';
        echo '<td>'.$email3.'</td>';
        echo '<td>'.$point3.'</td>';
        echo '</tr>';

        echo '<tr style="background-color: grey;">';
        echo '<td>11</td>';
        echo '<td>'.$name3.'</td>';
        echo '<td>'.$username3.'</td>';
        echo '<td>'.$email3.'</td>';
        echo '<td>'.$point3.'</td>';
        echo '</tr>';
        ?>
    </table>
</body>
</html>