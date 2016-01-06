#!/bin/sh
#rst2html README.rst noxon-api.htm
# --title: workaround for https://github.com/marianoguerra/rst2html5/issues/70
rst2html5\
 --bootstrap-css\
 --stylesheet-path=styles.css --embed-stylesheet\
 --title="Noxon gateway API documentation"\
 README.rst noxon-api.htm

# add current date to rendered docs
sed -i "s/##UPDATE##/`date -Is`/" noxon-api.htm
