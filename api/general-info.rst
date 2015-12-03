==============================
General connection information
==============================
The radios access the URLs via HTTP.


XML menu response format
========================
Menu responses are in XML format.
The MIME type sent by the server does not matter; the official servers
send ``text/html`` although it's clearly not HTML.

The XML prolog (``<?xml version="1.0"?>``) can be omitted.

The XML data are interpreted by the radios with a charset of ``iso-8859-1``,
no matter what the ``content-type`` header sent by the server or the XML
prolog say.

It is possible to add processing instructions to the XML without breaking
the radio.

XML tag attributes are not used.
