Tom's website is to help him get a cool new website to promote the talented musician Tom Hagerman.

**Server Info**
the node server is running until we make a switch to LAMP later

I installed pm2 (https://www.npmjs.com/package/pm2) to keep the server running.

You can check status of the server with:
```
pm2 list
```

If they aren't running for any reason, they can quickly be started:
```
pm2 delete all
cd /var/www/brownFox/staging
pm2 start http-server --name staging -- -p 8080
cd /var/www/brownFox/production
pm2 start http-server --name production -- -p 8081
```

All pm2 processes—like our server—can be restarted:
```
pm2 restart all
```

Or killed:
```
pm2 delete all
```

visit http://173.255.211.63:8080 to see the latest staging deploy
visit http://173.255.211.63:8081 to see the latest production deploy
