Sieve Asset Bundle
==================
Yii2 asset bundle wrapper around Sieve jquery plugin.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist devleaks/yii2-sieve "*"
```

or add

```
"devleaks/yii2-sieve": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code :

```php
<?php

use devleaks\sieve\Sieve;

?>
<div id="sieve-container">
	<div class="item">...</div>
	<div class="item">...</div>
	<div class="item">...</div>
	...
</div>

<?= Sieve::widget([
	'options' => [
		'id' => 'sieve-container'
	],
	'pluginOptions' => [
        'itemSelector' => 'div.item',
	]
]) ?>
