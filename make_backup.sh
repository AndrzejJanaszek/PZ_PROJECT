#!/bin/bash
echo "-asdasdgvajhsgdas jydgfa sjhydgfa sjydgffsauydgfas dygtf";

pathbackup="/BACKUPS/"
pathdata="/to_include/"

todaydate=$(date +'%m/%d/%Y')
dirname="backup_"todaydate
mkdir pathbackup"/"dirname

cp pathdata"/"{articles.php, services.php, teammates.php, articles.json, services.json, teammates.json} pathbackup"/"dirname