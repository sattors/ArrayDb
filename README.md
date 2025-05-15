````markdown
# ArrayDb

**ArrayDb** — PHP uchun sodda va yengil `key-author-value` saqlash utilitasi.

## Installation

```bash
composer require sattorbek/array-db
````

## Usage

```php
<?php

require_once __DIR__ . "/vendor/autoload.php";

use Cache\ArrayDb;

$db = new ArrayDb();

$db->set("key", "author", "Salom");

echo $db->get("key", "author");
```

## License

MIT License © Sattorbek

```
```
