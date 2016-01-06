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


.. include:: api/servers.rst
.. include:: api/general-info.rst
.. include:: api/login.rst
.. include:: api/menu.rst
.. include:: api/menuitems.rst
.. include:: api/bookmarks.rst
.. include:: api/firmware.rst


=====
About
=====
This documentation has been written by Christian Weiske,
cweiske+noxon@cweiske.de.

Last update: ##UPDATE##


License
=======
It is licensed under the GNU Free Documentation License.


Source code
===========
The documentation sources are available at
http://git.cweiske.de/noxon-api.git/
and mirrored at
https://github.com/cweiske/noxon-api


Home page
=========
A rendered version of this documentation is available at
http://cweiske.de/noxon-api.htm



Building
========
You need to install ``rst2html5`` before::

    $ pip install rst2html5-tools

Rendering the docs is done via a build script::

    $ ./build.sh
