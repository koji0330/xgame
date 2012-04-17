#!/bin/sh

CURRENT_DIR=$(cd $(dirname $0);pwd)
APP_ROOT_DIR=$(cd ${CURRENT_DIR}/../;pwd)
TMP_DIR=${APP_ROOT_DIR}/www/app/tmp
PERSISTENT_DIR=${TMP_DIR}/cache/persistent
MODELS_DIR=${TMP_DIR}/cache/models
DDL_FILE=${CURRENT_DIR}/db/erd.sql
DB_DIR=${TMP_DIR}/db
DB_FILE=${DB_DIR}/db.sqlite3

# create tmp directory
if [ ! -d ${TMP_DIR} ]; then
	echo "create directory\n ${TMP_DIR}"
	mkdir -p -m 777 ${TMP_DIR}
fi
if [ ! -d ${PERSISTENT_DIR} ]; then
	echo "create directory\n ${PERSISTENT_DIR}"
	mkdir -p -m 777 ${PERSISTENT_DIR}
fi
if [ ! -d ${MODELS_DIR} ]; then
	echo "create directory\n ${MODELS_DIR}"
	mkdir -p -m 777 ${MODELS_DIR}
fi

# create sqlite file
if [ ! -d ${DB_DIR} ]; then
	echo "create directory\n ${DB_DIR}"
	mkdir -p -m 777 ${DB_DIR}
fi
if [ ! -f ${DB_FILE} ]; then
	echo "create database file\n ${DB_FILE}"
	sqlite3 ${DB_FILE} < ${DDL_FILE}
fi
