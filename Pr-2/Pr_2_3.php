<html>

<head>
    <title>Practical 2.3</title>
</head>

<body>
<?php

echo "<h3>String functions</h3>";

echo "<h4> 1} chr() </h4>";
echo "Value is <b>100</b> after appling chr() Ans is <b>".chr(100)."</b><br>";
echo "Value is <b>97</b> after appling chr() Ans is <b>".chr(97)."</b><br>";
echo "Value is <b>55</b> after appling chr() Ans is <b>".chr(55)."</b><br>";

echo "<h4> 2} ord() </h4>";
echo "Value is <b>Rihil</b> after appling ord() Ans is <b>".ord("Rihil")."</b><br>";
echo "Value is <b>sanghani</b> after appling ord() Ans is <b>".ord("sanghani")."</b><br>";
echo "Value is <b>55</b> after appling ord() Ans is <b>".ord("55")."</b><br>";

echo "<h4> 3} strtolower() </h4>";
echo "Value is <b>RIHIL</b> after appling strtolower() Ans is <b>".strtolower("RIHIL")."</b><br>";
echo "Value is <b>Sanghani</b> after appling strtolower() Ans is <b>".strtolower("Sanghani")."</b><br>";
echo "Value is <b>hElLo</b> after appling strtolower() Ans is <b>".strtolower("hElLo")."</b><br>";

echo "<h4> 4} strtolower() </h4>";
echo "Value is <b>rihil</b> after appling strtoupper() Ans is <b>".strtoupper("rihil")."</b><br>";
echo "Value is <b>SanGhani</b> after appling strtoupper() Ans is <b>".strtoupper("SanGhani")."</b><br>";
echo "Value is <b>hElLo</b> after appling strtoupper() Ans is <b>".strtoupper("hElLo")."</b><br>";

echo "<h4> 5} ltrim() </h4>";
echo "Value is <b>___rihil</b> after appling ltrim() Ans is <b>".ltrim("   rihil")."</b><br>";
echo "Value is <b>____rihil____sanghani_____</b> after appling ltrim() Ans is <b>".ltrim("    rihil    sanghani     ")."</b><br>";
echo "Value is <b>rihil___sanghani____</b> after appling ltrim() Ans is <b>".ltrim("rihil  sanghani    ")."</b><br>";

echo "<h4> 6} rtrim() </h4>";
echo "Value is <b>rihil___  .</b> after appling rtrim() Ans is <b>".ltrim("rihil   ").".</b><br>";
echo "Value is <b>rihil____sanghani_____.</b> after appling rtrim() Ans is <b>".ltrim("rihil    sanghani    ").".</b><br>";
echo "Value is <b>___rihil_sanghani____</b> after appling rtrim() Ans is <b>".ltrim("   rihil  sanghani    ").".</b><br>";

echo "<h4> 7} trim() </h4>";
echo "Value is <b>___rihil___  .</b> after appling trim() Ans is <b>".ltrim("   rihil   ").".</b><br>";
echo "Value is <b>___rihil____sanghani_____.</b> after appling trim() Ans is <b>".ltrim("rihil    sanghani    ").".</b><br>";
echo "Value is <b>___rihil_sanghani____</b> after appling trim() Ans is <b>".ltrim("   rihil  sanghani    ").".</b><br>";

echo "<h4> 8} substr() </h4>";
echo "Value is <b>Dr. s. & s.s. ghanidhi collage</b> after appling substr() Ans is <b>".substr("Dr. s. & s.s. ghanidhi collage",-10).".</b><br>";
echo "Value is <b>Sanghani Rihil</b> after appling substr() Ans is <b>".substr("Sanghani Rihil",9).".</b><br>";
echo "Value is <b>196120316064</b> after appling substr() Ans is <b>".substr("196120316064",9).".</b><br>";

echo "<h4> 9} strlen() </h4>";
echo "Value is <b>Dr. s. & s.s. ghanidhi collage</b> after appling strlen() Ans is <b>".strlen("Dr. s. & s.s. ghanidhi collage").".</b><br>";
echo "Value is <b>Sanghani Rihil</b> after appling strlen() Ans is <b>".strlen("Sanghani Rihil").".</b><br>";
echo "Value is <b>196120316064</b> after appling strlen() Ans is <b>".strlen("196120316064").".</b><br>";

echo "<h4> 10} strcmp() </h4>";
echo "Value is <b>Dr. s. & s.s. ghanidhi collage</b> and second is <b>Dr. s. & s.s. ghanidhi collage</b> after appling strcmp() Ans is <b>".strcmp("Dr. s. & s.s. ghanidhi collage","Dr. s. & s.s. ghanidhi collage").".</b><br>";
echo "Value is <b>Sanghani Rihil</b> and second is <b>sanghani rihil</b> after appling strcmp() Ans is <b>".strcmp("Sanghani Rihil","sanghani rihil").".</b><br>";
echo "Value is <b>196120316064</b> and second is <b>196120316057</b> after appling strcmp() Ans is <b>".strcmp("196120316064","196120316057").".</b><br>";

echo "<h4> 11} strcasecmp() </h4>";
echo "Value is <b>Dr. s. & s.s. ghanidhi collage</b> and second is <b>dr. s. & s.s. ghanidhi collage</b> after appling strcasecmp() Ans is <b>".strcasecmp("Dr. s. & s.s. ghanidhi collage","Dr. s. & s.s. ghanidhi collage").".</b><br>";
echo "Value is <b>Sanghani Rihil</b> and second is <b>sanghani</b> after appling strcasecmp() Ans is <b>".strcasecmp("Sanghani Rihil","sanghani rihil").".</b><br>";
echo "Value is <b>196120316064</b> and second is <b>196120316057</b> after appling strcasecmp() Ans is <b>".strcasecmp("196120316064","196120316057").".</b><br>";

echo "<h4> 12} strpos() & stripos() </h4>";
echo "Value is <b>Dr. s. & s.s. ghanidhi collage</b> after appling strpos() Ans is <b>".strpos("Dr. s. & s.s. ghanidhi collage","g").".</b><br>";
echo "Value is <b>Sanghani Rihil</b> after appling strpos() Ans is <b>".strpos("Sanghani Rihil","i",9).".</b><br>";
echo "Value is <b>196120316064</b> after appling strpos() Ans is <b>".strpos("196120316064","17").".</b><br>";
echo "Value is <b>SANGHANI RIHIL</b> after appling stripos() Ans is <b>".stripos("SANGHANI RIHIL","i").".</b><br>";
echo "Value is <b>hello world</b> after appling stripos() Ans is <b>".stripos("hello world","L",).".</b><br>";

echo "<h4> 13} strstr() & stristr()</h4>";
echo "Value is <b>Dr. s. & s.s. ghanidhi collage</b> after appling strstr() Ans is <b>".strstr("Dr. s. & s.s. ghanidhi collage","g").".</b><br>";
echo "Value is <b>Sanghani Rihil</b> after appling strstr() Ans is <b>".strstr("Sanghani Rihil","i",9).".</b><br>";
echo "Value is <b>196120316064</b> after appling strstr() Ans is <b>".strstr("196120316064","6",10).".</b><br>";
echo "Value is <b>SANGHANI RIHIL</b> after appling stristr() Ans is <b>".stristr("SANGHANI RIHIL","i").".</b><br>";
echo "Value is <b>hello world</b> after appling stristr() Ans is <b>".strstr("hello world","L").".</b><br>";

echo "<h4> 14} strrev() </h4>";
echo "Value is <b>Dr. s. & s.s. ghanidhi collage</b> after appling strrev() Ans is <b>".strrev("Dr. s. & s.s. ghanidhi collage").".</b><br>";
echo "Value is <b>Sanghani Rihil</b> after appling strrev() Ans is <b>".strrev("Sanghani Rihil").".</b><br>";
echo "Value is <b>196120316064</b> after appling strrev() Ans is <b>".strrev("196120316064").".</b><br>";
?>
</body>
</html>