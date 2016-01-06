================
Firmware updates
================
I found the Noxon iRadio Cube request the following URL to check for
the currently available firmware version:

``http://apps.my-noxon.net/updates/dmp370/update.php?mac=00307771a0c7&hwid=13062&ver=36.6921&bl=6856&dlang=ger``

The MAC address is given in plain text here; it is not hashed/encrypted
as in the "normal" menu requests.

This seems to be a dedicated server, separate from the ones used
for the menu.

There is no login necessary to check firmware updates.


Response
========
The HTTP ``content-type`` header is again given as ``text/html``, but
it's XML:

.. include:: examples/firmware.res.xml
   :code:
