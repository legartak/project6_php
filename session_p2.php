<?php
session_start();
echo "Color: ".$_SESSION["color"]."<br>"."Fav F1 driver: ".$_SESSION["f1"];
session_destroy();