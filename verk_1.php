<?php
/**
 * Created by PhpStorm.
 * User: Notandi
 * Date: 19.1.2016
 * Time: 09:50
 */
echo "1:<br>";
echo "HTTP er protocol sem notast er við til þess að skoða vefsíður, það er stateless sem þýðir að það þarf ekki að vista upplýsingar og vinnur bara með þær sem eru gefnar.";

echo"<br>2:<br>";

echo"<br>3:<br>";

echo "<br>4:<br>Sjá kóða";
/*
"pizzas": [
	{
        "crust": "Original",
		"toppings": ["Cheese", "Pepperoni", "Garlic"],
		"status": "Cooking",
		"customer": {
            "name": "Daníel",
			"phonenumber": "6668888"
		}
	}
]

<pizzas>
	<pizza>
		<crust>Original</crust>
		<topping>Cheese</topping>
		<topping>Pepperoni</topping>
		<topping>Garlic</topping>
		<status>Cooking</status>
		<customer>
			<name>Daníel</name>
			<phonenumber>6668888</phonenumber>
		</customer>
	</pizza>
</pizzas>
*/
echo"<br>5:<br>";
$events = array(
    array(	'location' => 'San Fransisco, CA',
        'date' => 'May 1',
        'map' => 'img/map-ca.png'),
    array(	'location' => 'Austin, TX',
        'date' => 'May 15',
        'map' => 'img/map-TX.png'),
    array(	'location' => 'New York, NY',
        'date' => 'May 30',
        'map' => 'img/map-ny.png')
);

$eventsToJson = json_encode($events);
$eventsFromJson = json_decode($eventsToJson, true);


echo "<pre>";
echo '<div style="width: 33.3%; float: left;">';
print_r($events);
echo '</div>';
echo '<div style="width: 33.3%; float: left;">';
print_r($eventsFromJson);
echo '</div>';
echo "</pre>";
echo '<div style="width: 33.3%; float: left;">';
echo "<p>$eventsToJson</p>";
echo '</div>';
//print_r($eventsToJson);

echo"<br>6:<br>";
$url = 'http://apis.is/concerts';
$concerts = json_decode(file_get_contents($url), true);
$concerts = $concerts['results'];
echo '<table>';
foreach($concerts as $concert){
    echo '<tr>';
    foreach($concert as $cKey => $concertInfo){
        if ($cKey == 'imageSource'){
            echo "<td><img src='$concertInfo'></td>";
        } else {
            echo "<td style='border: 1px solid black;'>$concertInfo</td>";
        }
    }
    echo '</tr>';
}
echo '</table>';
