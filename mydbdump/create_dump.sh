#!/usr/bin/env bash


set -x
echo "Создание файла дампа из БД gym190 и замена regru на general."
cd `dirname $0`

dumpfile="gym190.`date +"%F_%H_%M"`.sql"

mysqldump -u gym190 -p gym190 > $dumpfile

if [[ -s "$dumpfile" ]]; then
    echo "Создан $dumpfile"
    echo "Замена regru на general..."
    cat $dumpfile | sed -e's/regru/general/g' > $dumpfile.TMP && mv $dumpfile.TMP $dumpfile && echo "OK"
fi
    




