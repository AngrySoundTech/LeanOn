---
layout: blank
---
<?php
//TODO: Fix ugly output

//{% for key in site.data.keys %}
//{% if key.name == "wotlabs" %}
    $apiKey = "{{key.key}}";
//{% endif %}
//{% endfor %}
$server = $_GET["server"];
$player = $_GET["player"];

print_r(file_get_contents("http://wotlabs.net/api.php?server=". $server ."&player=". $player ."&key=". $apiKey));
