# projectUrFU
Папка с проект урфу

1. будет дополняться.
2. Для использования на хостинге требуется переписать несколько методов.
3. Для использования на хостинге надо создать перенаправление всех запросов на index.php

# Для пункта №2.
Нужно поменять переменную _SERVER['PATH'], на _SERVER['REQUEST_URI']

# Для пункта №3
Создать файл .htaccess, в котором и будет прописано перенаправление на index.php, важно что нужно перенаправлять также и GET запросы
