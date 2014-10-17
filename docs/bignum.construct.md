bignum::__construct | bignum_init
========================

## Description
Object oriented style
<pre>
<a href="bignum.class.md"><strong>bignum</strong></a> bignum::__construct( <strong>mixed</strong> <a href="#number"><strong>$number</strong></a>[, <strong>int</strong> <a href="#base"><strong>$base</strong></a> <em>= 0</em> ] )
</pre>
Procedural style
<pre>
<a href="bignum.class.md"><strong>bignum</strong></a> bignum_init( <strong>mixed</strong> <a href="#number"><strong>$number</strong></a>[, <strong>int</strong> <a href="#base"><strong>$base</strong></a> <em>= 0</em> ] )
</pre>
Creates a bignum from a [bignum](bignum.class.md), [GMP number](http://us3.php.net/manual/en/gmp.resources.php), integer, or string.

## Parameters
<a name="number">**number**</a>
&nbsp;&nbsp;&nbsp;&nbsp;A [bignum](bignum.class.md), [GMP number](http://us3.php.net/manual/en/gmp.resources.php), integer, or string. The string representation can be decimal, hexadecimal or octal.
<a name="base">**base**</a>
&nbsp;&nbsp;&nbsp;&nbsp;The base/radix.
&nbsp;&nbsp;&nbsp;&nbsp;The base may vary from 2 to 36. If base is 0 (default value), the actual base is determined from the leading characters: if the first two characters are 0x or 0X, hexadecimal is assumed, otherwise if the first character is "0", octal is assumed, otherwise decimal is assumed.

## Return Values
Returns a new bignum

## Examples
**Example #1 Object oriented style**
```php
<?php
$a = new bignum(1234);
$b = new bignum(gmp_init(1234));
$c = new bignum("1234");
$d = new bignum("0x4D2");
$e = new bignum("02322");
$f = new bignum("10011010010", 2);
?>
```

**Example #2 Procedural style**
```php
<?php
$a = bignum_init(1234);
$b = bignum_init(gmp_init(1234));
$c = bignum_init("1234");
$d = bignum_init("0x4D2");
$e = bignum_init("02322");
$f = bignum_init("10011010010", 2);
?>
```