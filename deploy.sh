eval "(sh-agent -s)" #start the ssh agent
chmod 600 .travis/deploy_key.pem # this key should have push access
ssh-add .travis/deploy_key.pem
git remote add live ssh://user@123.456.78.90/sites/example.com
git push live master
