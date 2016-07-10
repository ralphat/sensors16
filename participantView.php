<?php
ini_set('display_errors','off');

include './connect.php';

$query = "SELECT sum(moores_labyrinth) as moores_labyrinth, sum(paper_presentation) as paper_presentation, sum(encipher) as encipher, sum(quiz) as quiz, sum(sensor_design) as sensor_design, sum(gesture_control) as gesture_control, sum(data_science) as data_science, sum(design) as design, sum(machine_learning) as machine_learning, sum(brain_wave) as brain_wave, sum(music_production) as music_production FROM registration";

$res = mysql_query($query);
$arr = mysql_fetch_array($res);

echo "<b><u>Events</u> -</b><br />";
echo "Moore's Labyrinth : ".$arr['moores_labyrinth']."<br />";
echo "Paper presentation : ".$arr['paper_presentation']. "<br />";
echo "Encipher : ".$arr['encipher']. "<br />";
echo "Quiz : ".$arr['quiz']. "<br />";
echo "Sensor Design : ".$arr['sensor_design']. "<br /><br />";

echo "<b><u>Workshops</u> -</b><br />";
echo "Gesture Control : ".$arr['gesture_control']."<br />";
echo "Data Science : ".$arr['data_science']. "<br />";
echo "Design : ".$arr['design']. "<br />";
echo "Machine learning : ".$arr['machine_learning']. "<br />";
echo "Brain wave : ".$arr['brain_wave']. "<br />";
echo "Music production : ".$arr['music_production']. "<br /><br />";
?>