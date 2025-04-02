**Two ways**
    FTP (File Transfer Protocol)
        Easy to set up
        Works on shared hosting	Slower
        Less secure
        No automation (can't run commands)
        Requires manual intervention for migrations/caching.

    SSH (Secure Shell)	
        Faster (rsync)
        Secure (encrypted)
        Can run commands (Composer, Artisan)
        Requires SSH access
        Needs key-based authentication
        Use VPS for better Laravel deployment (SSH, Supervisor, etc.)


.env.test for github to use [if no sensitive data in it]
Tip:
store production env content in secret and populate in workflow

repo Settings → Secrets and variables → Actions 
 


1- create repo
2- go to github marketplace [search workflow]
3- paste in your yml
4- ftp account




//tutorial ci/cd vps ssh
https://www.youtube.com/watch?v=6mjv2tBK1jY
# how to code well

composer require --dev phpstan/phpstan
composer require --dev larastan/larastan

create phpstan.neon [file for phpstan config]

php ./vendor/bin/phpstan analyse
php ./vendor/bin/phpunit

create .env.test

//after connect ssh in project dir
git config pull.rebase false
pwd
	/mnt/data/home/master/applications/cnpyummpea/public_html
git config --global-add safe.directory /mnt/data/home/master/applications/cnpyummpea/public_html

add ssh key to github
clone in public_html your project

generate key
	ssh-keygen -t rsa -b 4096 -m PEM -C "cloudways-deploy" -f ~/.ssh/id_rsa_cloudways
	note paraphrase

in github secret add
APP_PATH	[is output of pwd command result in project dir]
SSH_HOST
SSH_PASSWORD
SSH_PRIVATE_KEY
SSH_USERNAME
