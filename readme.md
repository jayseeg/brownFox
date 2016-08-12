# Description
Tom's website is to help him get a cool new website to promote the talented musician Tom Hagerman.

# Server Info
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

# Command line commands
## Starting work on a new Issue
### get to root directory (do this before anything else to make sure you're in the right place)
```
cd ~/site/brownFox
```
### status
```
git status
```
### get into staging branch
```
git checkout staging
```
### get latest version of staging (always do this before making a new branch)
```
git pull
```
### make a new branch
```
git checkout -b {replace this with your username}/{name of new branch}
```
## Finishing work on an Issue
### commit your changes once you're happy with them
```
git add .
git commit -am '{put a simle message about what you changed here}'
```
### push your changes to github after you've commited them (don't forget to checkout staging & pull it down from github after finishing this step)
```
git push origin {your username}/{name of branch}
```
### follow steps in Github instructions to submit a PR
# Github instructions
Once you've pushed a branch to Github, you need to submit a pull request and assign it to @jayseeg.

Visit github.com, & navigate to our repo if you're not already there.

Click New Pull Request.

Make sure the base select box has 'staging' selected.

Make sure the compare select box has your new branch selected.

Click Create Pull Request.

Assign the Pull Request to @jayseeg. 
