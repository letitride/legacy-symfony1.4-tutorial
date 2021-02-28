$ docker run -itd  -v /Users/ichikawafumiya/study/PHP/:/var/PHP -p 9000:9000 f4401e8dcdbf /bin/bash

CentOS6は2020/12にサポート終了したのでmirrorリポジトリをyumリポジトリとして変更しておく
sed -i -e "s/^mirrorlist=http:\/\/mirrorlist.centos.org/#mirrorlist=http:\/\/mirrorlist.centos.org/g" /etc/yum.repos.d/CentOS-Base.repo

sed -i -e "s/^#baseurl=http:\/\/mirror.centos.org/baseurl=http:\/\/vault.centos.org/g" /etc/yum.repos.d/CentOS-Base.repo

mysqlコミュニティリポジトリ
rpm -Uvh https://dev.mysql.com/get/mysql80-community-release-el6-1.noarch.rpm

対象バージョンのmysqlリポジトリを有効に
/etc/yum.repos.d/mysql-community.repo 
enable=1 mysql57
enable=0 mysql8

yum clean all

yum install -y mysql-community-server

service mysqld start

初期パスワードの確認
cat /var/log/mysqld.log |grep root


rootパスワードの変更
mysql -u root -p
SET PASSWORD = PASSWORD('Ichikawa#123')

```
# Be sure to only have this line once in your configuration
NameVirtualHost 0.0.0.0:8080

# This is the configuration for your project
Listen 0.0.0.0:8080

<VirtualHost 0.0.0.0:8080>
  DocumentRoot "/var/PHP/sfprojects/jobeet/web"
  DirectoryIndex index.php
  <Directory "/var/PHP/sfprojects/jobeet/web">
    AllowOverride All
    Allow from All
  </Directory>

  Alias /sf /var/PHP/sfprojects/jobeet/lib/vendor/symfony/data/web/sf
  <Directory "/var/PHP/sfprojects/jobeet/lib/vendor/symfony/data/web/sf">
    AllowOverride All
    Allow from All
  </Directory>
</VirtualHost>
```
