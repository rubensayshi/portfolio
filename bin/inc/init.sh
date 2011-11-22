#!/bin/bash

if [ -z "$ROOT" ]; then
	ROOT=`php -r "echo dirname(dirname(dirname(realpath('$(pwd)/$0'))));"`
	export ROOT
fi

source "${ROOT}/bin/inc/apache_usr.sh"
source "${ROOT}/bin/inc/dev_usr.sh"

if [ -z "$SUDO_DO" ]; then
	SUDO_DO="sudo -u root "
	export SUDO_DO
fi

if [ -z "$GIT" ]; then
	GIT="git --git-dir=${ROOT}/.git --work-tree=${ROOT} "
	export GIT
fi
