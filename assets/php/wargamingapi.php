<?php
//TODO: Fix ugly output
//TODO: Expand for more parts of the API

//{% for key in site.data.keys %}
//{% if key.name == "wargaming" %}
$apiKey = "{{key.key}}";
//{% endif %}
//{% endfor %}

print_r(file_get_contents("https://api.worldoftanks.com/wgn/clans/info/?application_id=". $apiKey ."&clan_id=1000000238"));
