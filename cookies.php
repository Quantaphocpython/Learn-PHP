<?php
echo "Cookies";
setcookie('name', 'Quan', time() + 24 * 3600);
setcookie('name', 'Quan', time() - 24 * 3600); // unset cookie