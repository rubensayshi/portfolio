#!/bin/bash

wkhtmltopdf --background --margin-bottom 0mm --margin-top 0mm --margin-left 0mm --margin-right 0mm http://ruben.portfolio.nl/resume?pdf=1 ../cv.pdf
wkhtmltopdf --background --margin-bottom 0mm --margin-top 0mm --margin-left 0mm --margin-right 0mm http://ruben.portfolio.nl/resume?printpdf=1 ../cv_print.pdf
