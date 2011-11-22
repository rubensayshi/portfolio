#!/bin/bash

if [ -z "$ROOT" ]; then
	ROOT=`php -r "echo dirname(dirname(realpath('$(pwd)/$0')));"`
	export ROOT
fi

source "${ROOT}/bin/inc/init.sh"

URL="http://ruben.portfolio.nl/resume"
DEST="${ROOT}/httpdocs/pdf"

NORMAL_PDF="${DEST}/cv.pdf"
wkhtmltopdf --background --margin-bottom 0mm --margin-top 0mm --margin-left 0mm --margin-right 0mm ${URL}?pdf=1 ${NORMAL_PDF}
${SUDO_DO} chmod 0770 ${NORMAL_PDF}
${SUDO_DO} chown $DEV_USR:$APACHE_USR_GRP ${NORMAL_PDF}

PRINT_PDF="${DEST}/cv_print.pdf"
wkhtmltopdf --background --margin-bottom 0mm --margin-top 0mm --margin-left 0mm --margin-right 0mm ${URL}?printpdf=1 ${PRINT_PDF}
${SUDO_DO} chmod 0770 ${PRINT_PDF}
${SUDO_DO} chown $DEV_USR:$APACHE_USR_GRP ${PRINT_PDF}
