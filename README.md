AdminLTE 3 widgets for Yii2 Framework
===============================

This package provide AdminLTE3 widgets, external AdminLTE widgets (like Select2 InputMask DatePicker...) are not
(and will not be) part of this package.

For external widgets use others yii packages.

At this moment the implementation is partial and <b>widgets can be subject breaking changes</b>.

I'll try to keep backward compability but is not guarantee.

Currently widget avail are:
<ul>
    <li>Infobox</li>
    <li>SmallBox</li>
</ul>

Still to be implemented: all the other widgets in the following pages:

[AdminLTE3 widgets demo](https://adminlte.io/themes/dev/AdminLTE/pages/widgets.html)
and
[AdminLTE3 component section in docs](https://adminlte.io/docs/3.0/)

I'm going to implement giving priority to what I need. Anyway feel free to open an issue with a request,
I'll try to put it in queue.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist bobonov/yii2-adminlte-widgets "~1.0.0"
```

or add

```
"bobono/yii2-adminlte-widgets": "~1.0.0"
```

to the require section of your `composer.json` file.

<b><i>This package is release under [GPLv3](GPLv3.md), read the [lincense](LICENSE.md)</i></b>