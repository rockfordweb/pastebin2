PASTEBIN TWO

Requirements:

- Git
- PHP 5.4 (for the server and for the command line)
- install mcrypt (brew install mcrypt)
- install Composer https://getcomposer.org/doc/00-intro.md#globally (run composer install after cloning the repository)
- install bower (brew install node && npm install bower) or update your bower if it's old

- database and credentials to match app/config/local/database.php

- npm install
- composer update
- bower install
- bower install boostrap -S (make sure the bower_components folder is in /public/)
- php artisan migrate
- grunt develop


Run `grunt develop` to start the watcher. Watcher will pay attention to `/public/less/style.less`, `/public/js/main.js`, and `Gruntfile.js` and do things with them.


Form
Edit Form
View Pasted Content


Laravel


Task List:

- set up environment
- download necessary packages
- Build DB table
- Download / Install Laravel
- Get routes file started
- Write DB model
- Empty/edit form view (home page)
- Write empty form controller
- Submit form controller
	-Method for URL hash
- Write edit form controller
- Write content list view
- Content list controller
- Write content detail view
- Content detail controller

v2

- users/logins
- css preprocessing
- public/private

- rate bad pastes
- comment/insult all the javascripts, especially backbone

- blade layout
- syntax highlighting w/ language select
- delete embarrassing pastes
- expiring pastes
- testing
- versioned pastes

v3_FINAL

- user functionality (private/public pastes, signin/signout/password controller)
- search -- potential searches include by syntax type, title, content, user, by date
