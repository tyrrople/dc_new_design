css:
	./node_modules/.bin/gulp
sync:
	cd ./build && rsync -r -P ./ root@193.0.178.41:/var/www/html

dump_html:
	wget http://localhost:1099/main.php -O build/main.html
	emacs build/main.html --batch --eval="(progn (package-initialize)(load \"web-mode\")(web-mode)(setq web-mode-markup-indent-offset 2)(indent-region (point-min) (point-max))(save-buffer))"


git_sync: dump_html
	GIT_SSH_COMMAND='ssh -i ~/.ssh/1-time-key/id_dreamcaster' git push
