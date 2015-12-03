************************
Noxon iRadio gateway API
************************

This is an attempt to document the API between Noxon iRadio devices
and the servers at ``vtuner.com`` and ``my-noxon.net``.

Noxon iRadio devices have a couple of hard-coded menu entries that
connect to certain HTTP urls when accessing them:

- Internetradio
- Podcasts
- My Noxon

The server returns XML data representing menus that get shown
on the radio.
Menus consist of folders, audio URLs, unactionable message entries
and popup messages.


.. contents::
   :depth: 2


==============
Devices tested
==============
* Noxon iRadio (original white version)
* Noxon iRadio cube


.. include:: api/general-info.rst
.. include:: api/login.rst
.. include:: api/menu.rst
.. include:: api/menuitems.rst
