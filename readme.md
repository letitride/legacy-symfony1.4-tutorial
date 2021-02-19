$ docker run -itd  -v /Users/ichikawafumiya/study/PHP/:/var/PHP -p 9000:9000 f4401e8dcdbf /bin/bash

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
