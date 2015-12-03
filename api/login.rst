=====
Login
=====
Before menu data are requested, the radio obtains a token that is used
to hash the MAC address in subsequent requests.

The following URLs are used for requesting the "encryption token":

Internetradio
  ``http://radio567.vtuner.com:80/setupapp/radio567/asp/BrowseXPA/LoginXML.asp?token=0``
Podcasts
  ``http://radio567.vtuner.com:80/setupapp/radio567/asp/BrowseXPA/loginXML.asp?token=0``
My Noxon
  ``http://gatekeeper.my-noxon.net:80/RadioNativeLogin.php``


Response
========
The response is an XML file with only one tag.

.. include:: examples/login.res.xml
   :code:
