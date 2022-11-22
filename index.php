<?php

$manager = new MongoDB\Driver\Manager("mongodb+srv://pujarchmnsyh:pujaaaaa21@cluster0.1vxurlq.mongodb.net/?retryWrites=true&w=majority");

$query = new MongoDB\Driver\Query(array("restaurant_id" => "40356018"));

$cursor = $manager->executeQuery('sample_restaurants.restaurants', $query);

echo "<pre>";
print_r($cursor->toArray());
echo "</pre>";
?>