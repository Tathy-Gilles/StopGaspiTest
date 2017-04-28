<?php 
try {
header('Content-Type: xml+rss');    
  $bdd = new PDO('mysql:host=localhost;dbname=stopgaspi;charset=utf8','root','');



} catch (Exception $e) {
  echo "erreur de batard";
}

$articles = $bdd->query('SELECT * FROM articles ORDER BY date_time_post DESC LIMIT 0,25');

$lastBuildDate = $bdd->query('SELECT date_time_post FROM articles ORDER BY date_time_post DESC LIMIT 0,1');
$lastBuildDate = $lastBuildDate->fetch()['date_time_post'];

$lastBuildContent = $bdd->query('SELECT contenu FROM articles ORDER BY date_time_post DESC LIMIT 0,1');
$lastBuildContent = $lastBuildContent->fetch()['contenu'];

$lastBuildTitle = $bdd->query('SELECT titre FROM articles ORDER BY date_time_post DESC LIMIT 0,1');
$lastBuildTitle = $lastBuildTitle->fetch()['titre'];

 ?>

<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0">
    <channel>
        <title>Mon site</title>
        <description>Ceci est un exemple de flux RSS 2.0</description>
        <lastBuildDate>Sat, 07 Sep 2002 00:00:01 GMT</lastBuildDate>
        <link>http://www.example.org</link>
        <item>
            <title>Actualité N°1</title>
            <description>Ceci est ma première actualité</description>
            <pubDate>Sat, 07 Sep 2002 00:00:01 GMT</pubDate>
            <link>http://www.example.org/actu1</link>
        </item>
        <item>
            <title>Actualité N°2</title>
            <description>Ceci est ma seconde actualité</description>
            <pubDate>Sat, 07 Sep 2002 00:00:01 GMT</pubDate>
            <link>http://www.example.org/actu2</link>
        </item>
    </channel>
</rss>