<?php
// Activity 4: Loop Control with break and continue

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }
    if ($i == 8) {
        break;
    }
    echo $i . " ";
}

?>