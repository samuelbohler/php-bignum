bignum::abs | bignum_abs
========================

## Description
Object oriented style
<pre>
<a href="bignum.class.md"><strong>bignum</strong></a> $bignum->abs( <strong>void</strong> )
</pre>
Procedural style
<pre>
<a href="bignum.class.md"><strong>bignum</strong></a> bignum_abs( <strong>mixed</strong> <a href="#operand">$operand</a> )
</pre>
Get the absolute value of a number.

## Parameters
<a name="operand">**operand**</a>
&nbsp;&nbsp;&nbsp;&nbsp;Procedural style only: A [bignum](bignum.class.md), integer, or string. The string representation can be decimal, hexadecimal or octal.

## Return Values
Returns a new bignum with the absolute value of the instance or [operand](#operand).

## Examples
**Example #1 Object oriented style**
```php
<?php
$abs1 = bignum("903450349958")->abs();
$abs2 = bignum("-903450349958")->abs();

echo $abs1 . "\n";
echo $abs2;
?>
```
The above will output
<pre>
903450349958
903450349958
</pre>

**Example #2 Procedural style**
```php
<?php
$abs1 = bignum_abs("903450349958");
$abs2 = bignum_abs("-903450349958");

echo $abs1 . "\n";
echo $abs2;
?>
```
The above will output
<pre>
903450349958
903450349958
</pre>