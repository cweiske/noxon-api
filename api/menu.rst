====
Menu
====
After the ``encryptedToken`` has been obtained during the login process,
the menu itself is fetched.


Initial URLs
============
The following URLs are used after login:

Internetradio
  ``http://radio567.vtuner.com:80/setupapp/radio567/asp/BrowseXPA/LoginXML.asp?mac=6FD0281BB8B2C3D46ABB2A34CA9EF1CF&fver=3.8.36.6921&dlang=ger&hwid=13062&startitems=1&enditems=10``
Podcasts
  ``http://radio567.vtuner.com:80/setupapp/radio567/asp/BrowseXPA/navXML.asp?gofile=S-ByLocation&mac=6FD0281BB8B2C3D46ABB2A34CA9EF1CF&fver=3.8.36.6921&dlang=ger&hwid=13062&startitems=1&enditems=10``
My Noxon
  ``http://gatekeeper.my-noxon.net:80/RadioNative.php?hwid=13062&mac=6FD0281BB8B2C3D46ABB2A34CA9EF1CF&fver=3.8.36.6921&dlang=ger&startitems=1&enditems=10``


GET parameters
==============
The iRadio devices append a number of GET parameters to each menu URL:

``mac``
  MAC address of the device, hashed/encrypted with the ``encryptedToken``
  obtained during the login process.

  Example: ``6FD0281BB8B2C3D46ABB2A34CA9EF1CF``
``fver``
  Firmware version

  Example: ``3.8.36.6921``
``dlang``
  Language

  Example: ``ger``
``hwid``
  Hardware revision

  Example: ``13062``
``startitems``
  Paging settings; first menu entry to fetch.

  First entry is ``1``.
``enditems``
  Paging: Last menu entry to fetch
  Default: ``startitems + 9``


Paging
======
By default, the first 10 entries of a menu are requested.

When the response contains an ``<ItemCount>`` tag, the last 10
are fetched, and then 10-20.

Example:

#. Radio requests items ``1-10``
#. Response has ``<ItemCount>`` of ``52``
#. Radio requests items ``42-52``
#. Radio requests items ``10-20``

When scrolling to position ``11``, the radio requests ``19-29``.

Scrolling further, ``28-38`` are fetched, then ``37-47``.


Response
========
XML file with a any number of menu entries.

The XML root tag is ``ListOfItems``.

A menu ``<ListOfItems>`` can contain the following tags:

``<ItemCount>``
  Total number of items. Can be ``-1``.

  The previous item is not counted.

  Optional.
``<Item>``
  Any number of items.
``<NoCache>``
  ??? Forces the radio to re-fetch the list when going back to it
  via the back (left arrow) button.

  Only known value: ``Yes``

.. include:: examples/menu.res.xml
   :code:
