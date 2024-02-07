tmux \
	new-window 'php artisan serve' \; \
	split-window 'npm run dev' \; \
#	detach-client
#	tmux a
