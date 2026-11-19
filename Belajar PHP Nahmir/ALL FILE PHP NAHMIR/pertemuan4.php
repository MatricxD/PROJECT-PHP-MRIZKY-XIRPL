<?php

// 1. Membuat konstanta dengan define()

define('DB_SERVER', 'localhost');
define('DB_USER', 'petanikode');
define('DB_PASS', 'R4Hasia');
define('DB_NAME', 'belajar');


// 2. Membuat konstanta dengan const

const API_KEY = "1234";


// 3. Konstanta lainnya

const SITE_NAME = "Petani Kode";
const BASE_URL = "https://www.petanikode.com";

define('VERSION', '1.0.0');


// 4. Menampilkan nilai konstanta

print "Site Name: " . SITE_NAME;
print "<br>";

print "Base URL: " . BASE_URL;
print "<br>";

print "Version: " . VERSION;
print "<br>";

print "API Key: " . API_KEY;

?>


