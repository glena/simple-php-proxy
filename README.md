simple-php-proxy
================

Simple php proxy to scrap websites

Getting started with heroku
---------------------------

Clone this repo: 
```
git clone https://github.com/glena/simple-php-proxy.git && cd simple-php-proxy
```

Login into heroku (check how to install the heroku cli client):
```
heroku login
```
  
Create a new app: 
```  
heroku create
```  
  *Note: this step will create a new app and will add the remote to the local repository*
  
Deploy to heroku:
```
git push heroku master
```

Open it in a browser:
```
heroku open
```

**More info about deploying a php app to heroku: https://devcenter.heroku.com/articles/getting-started-with-php**

Next steps
----------

[ ] Proxy support
[ ] Base64 url encode support
