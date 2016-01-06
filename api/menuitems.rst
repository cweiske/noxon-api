==========
Menu items
==========
A menu ``<ListOfItems>`` can contain the following tags:


Item types
==========
There are different types of menu entries. Their type is specified
by the ``<ItemType>`` tag:

``Dir``
  Directory you can navigate into
``Display``
  A message line you cannot act on, only read.
``Message``
  A full-screen message.

  It vanishes after some seconds and shows the rest of the list,
  or goes back to the previous list if there are no other
  list items.

  When entering from the iRadio's main menu and the rest of the
  list is empty, "--leer--" is shown (not going back to main menu).
``Previous``
  Link back to the parent folder.
``ShowEpisode``
  Single episode from a ``ShowOnDemand`` that you can hear, e.g. a single podcast
  episode.
``ShowOnDemand``
  Part of an internet station: A specific show about one topic or by a
  specific person.

  Also used for a single podcast.
``Station``
  An internet radio station (live stream).


Dir
===
A directory in which you can go into.

Allowed tags:

``ItemType``
  ``Dir``  
``Title``
  Name to show
``UrlDir``
  URL to use when navigating into the folder
``UrlDirBackUp``
  URL to use when ``UrlDir`` returned a HTTP error status code.
``BookmarkShow``
  ??? Does it work?
``NoAudioContent``
  ???

  Known value: ``true``


.. include:: examples/menuitem-dir.xml
   :code:


Display
=======
A message line you cannot act on, only read.

Displayed like a normal directory or radio station, but without an icon
at the end.

Useful to display messages on several lines, while showing other item types
at the same time.

Related to ``Message``.

Allowed tags:

``ItemType``
  ``Display``
``Display``
  The message to show

.. include:: examples/menuitem-display.xml
   :code:


Message
=======
A full-screen message.
It vanishes after some seconds and shows the rest of the list,
or goes back to the previous list if there are no other list items.

When entering from the iRadio's main menu and the rest of the
list is empty, ``--leer--`` is shown (not going back to main menu).

Related to ``Display``.

Allowed tags:

``ItemType``
  ``Message``
``Message``
  The message to show. Automatically breaks onto multiple lines when too long.


.. include:: examples/menuitem-message.xml
   :code:


Previous
========
Link back to the parent folder.

Does not count to the ``ItemCount`` number.

Allowed tags:

``ItemType``
  ``Previous``
``UrlPrevious``
  Full URL that is fetched when clicking the back button (left arrow).
``UrlPreviousBackUp``
  In case ``UrlPrevious`` brings an HTTP error status code, this one is used.


.. include:: examples/menuitem-previous.xml
   :code:


ShowEpisode
===========
A single episode/file from a ``ShowOnDemand`` that you can listen to,
e.g. a single podcast episode.

Allowed tags:

``ItemType``
  ``ShowEpisode``
``ShowEpisodeID``
  ???
``ShowEpisodeName``
  Title
``ShowEpisodeURL``
  URL to use when playing the podcast.
``BookmarkShow``
  URL to use when favoriting/bookmarking the episode.
  The full show is bookmarked, not the single episode.
``ShowDesc``
  Description.
``ShowFormat``
  Category, e.g. "Reggae", "Sports", "Technology". Seems to be free text.
``Lang``
  Language, e.g. "English"
``Country``
  Country of origin, e.g. "Germany"
``ShowMime``
  Stream file type (not a valid MIME type, despite the tag name)

  Known values:

  - ``AAC``
  - ``MP3``
  - ``RealPlayer``
  - ``WMA``


.. include:: examples/menuitem-showepisode.xml
   :code:


ShowOnDemand
============
A podcast, or a regular part (show) of a radio station - about a
specific topic or by an anchorman.

Single episodes of a show are available via ``ShowOnDemandURL``.

Allowed tags:

``ItemType``
  ``ShowOnDemand``
``ShowOnDemandID``
  Alphanumeric Identifier
``ShowOnDemandName``
  Title
``Logo``
  URL to an image file
``ShowOnDemandURL``
  URL with a list of ``ShowEpisode`` items
``ShowOnDemandURLBackUp``
  Alternative/backup URL to ``ShowOnDemandURL``
``BookmarkShow``
  URL to use when favoriting/bookmarking the show.


.. include:: examples/menuitem-showondemand.xml
   :code:


Station
=======
An internet radio station / live stream.

Allowed tags:

``ItemType``
  ``Station``
``StationId``
  Alphanumeric ID
``StationName``
  Title, e.g. "Deutsche Welle English Live"
``StationUrl``
  Stream URL
``StationDesc``
  Description
``StationFormat``
  Category, see ``ShowFormat``
``StationLocation``
  Country of location
``StationBandWidth``
  Bitrate in kbit/s, e.g. ``64``
``StationMime``
  Stream type - see ``ShowMime``
``Relia``
  ??? Reliabilit factor, integer

  Known values: 1 - 5
``Bookmark``
  URL to call when bookmarking the station
``Logo``
  URL to an image file


.. include:: examples/menuitem-station.xml
   :code:
