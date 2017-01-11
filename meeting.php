<?php
    require_once "config.php";
    use Parse\ParseException;
    use Parse\ParseObject;
    use Parse\ParseQuery;
    use Parse\ParseGeoPoint;
    use Parse\ParseFile;

    $result=false;

    if($_POST['section']==8){

        $meeting = new ParseObject("meeting");
        $meeting->set("lastname",$_POST['lastName']);
        $meeting->set("firstname",$_POST['firstName']);
        $meeting->set("telephone",$_POST['telephone']);
        $meeting->set("country",$_POST['location']);
        $meeting->set("email",$_POST['email']);
        $meeting->set("arrival_date",$_POST['arrival_date']);
        $meeting->set("arrival_time",$_POST['arrival_time']);
        $meeting->set("arrival_flight",intval($_POST['arrival_flight']));
        $meeting->set("type",intval($_POST['type']));

        try {
            $meeting->save();
            $result = true;
        } catch (Exception $e) {
            echo $e;
        }
    }
    if ($result) {
        echo 1; 
    }
    else{
        echo 0;
    }
?>
