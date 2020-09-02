#!/bin/bash

# 修改数据库中的 FLAG
mysql -e "CREATE DATABASE IF NOT EXISTS supersqli;USE supersqli; CREATE TABLE IF NOT EXISTS \`saber_love\` (\`flag\` varchar(100) NOT NULL) ENGINE=MyISAM  DEFAULT CHARSET=utf8;INSERT INTO \`saber_love\` VALUES ('$FLAG');" -uroot -proot

export FLAG=not_flag
FLAG=not_flag

rm -f /flag.sh
