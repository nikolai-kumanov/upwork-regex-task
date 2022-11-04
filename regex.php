<?php
// example code
$content = '<span> 
    <h2 id="1-full-beard">1. Full Beard</h2> 
    <div> bla </div> 
    <h2 id="2-short-beard">2. Short Beard</h2> 
    <h2 id="6-chin-strap-beard">6. <a href="https://www.baldandbeards.com/chin-strap-beard/">Chin Strap Beard</a></h2>
</span>';

$matches = [];
// updated regex
preg_match_all("/<h[2,3](?:\sid=\"(.*)\")\>(\d+.*)<\/h[2,3]>/", $content, $matches);

$tags = $matches[0];
$ids = $matches[1];
$names = $matches[2];

print implode(', ', $tags);
echo "\n";
print implode(', ', $ids);
echo "\n";
print implode(', ', $names);

// TODO either update html generating functionality to match work with regex results or trim regex results from <a>  

?>