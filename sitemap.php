<?php
// Plan du site pour les moteurs de recherche (#1077) : pages publiques et sections des cours ouverts.
include "util.php";
require_once __DIR__ . "/api/SeoAPI.php";

$radiko = rtrim($urlracine, "/") . "/";
$urloj = array_merge(SeoAPI::PAGXOJ, (new SeoAPI($bdd))->lecionojUrl());

header("Content-Type: application/xml; charset=utf-8");
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
foreach ($urloj as $url) {
	echo "  <url><loc>" . htmlspecialchars($radiko . $url, ENT_XML1 | ENT_QUOTES, "UTF-8") . "</loc></url>\n";
}
echo "</urlset>\n";
