# ArrayDb

**ArrayDb** — A simple and lightweight key-value storage utility based on arrays for PHP.
This small library is primarily designed for sessions, temporary states, or simple caching.

---

## Installation

```bash
composer require sattorbek/array-db
```

---

## Usage

```php
<?php

require_once __DIR__ . "/vendor/autoload.php";

use Cache\ArrayDb;

$db = new ArrayDb();

$db->set("key", "author", "Salom");

echo $db->get("key", "author");
```

---

## Features


* Minimalistic and efficient key-author-value storage mechanism
* Quick usage with a simple interface
* Written type-safe for PHP 8+
* Easy integration and extensibility options

---

## Requirements

* PHP 8.0 or higher version
* Composer (for package management)

---

## License

MIT License © Sattorbek

---

## Contact

Author: Sattorbek
GitHub: [https://github.com/sattors/ArrayDb](https://github.com/sattors/ArrayDb)
