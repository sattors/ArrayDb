# ArrayDb

**ArrayDb** — PHP uchun sodda va yengil `array` asosida kalit-yozuvchi saqlash (key-value storage) utilitasi.
Bu kichik kutubxona asosan sessiyalar, vaqtinchalik holatlar yoki oddiy keshlash uchun mo‘ljallangan.

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

* Minimalistik va samarali `key-author-value` saqlash mexanizmi
* Oddiy interfeys bilan tezkor foydalanish
* PHP 8+ uchun type-safe yozilgan
* Oson integratsiya va kengaytirish imkoniyati

---

## Requirements

* PHP 8.0 yoki undan yuqori versiyasi
* Composer (paketlarni boshqarish uchun)

---

## License

MIT License © Sattorbek

---

## Contact

Loyiha muallifi: Sattorbek
GitHub: [https://github.com/sattors/ArrayDb](https://github.com/sattors/ArrayDb)
