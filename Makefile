css:
	./node_modules/.bin/gulp
sync:
	cd ./build && rsync -r -P ./ root@193.0.178.41:/var/www/html

git_sync:
	GIT_SSH_COMMAND='ssh -i ~/.ssh/1-time-key/id_dreamcaster' git push
