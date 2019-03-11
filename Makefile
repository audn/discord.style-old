node_version = 9

all:
	# Install Node deps
	npm install

	# Install composer deps
	COMPOSER_HOME="~/.composer" composer install

	# Build assets
	gulp deploy --production

gulp:
	# Set node version
	n ${node_version}

	# Install Node deps
	npm install

	# Install composer deps
	composer install

	# Build assets
	gulp deploy

perms:
	# Fixing permissions
	sudo chown -R `whoami` *

	# Setting node version
	sudo npm cache clean -f

	sudo npm install -g n

	sudo n ${node_version}

	# Removing node modules
	rm -rf node_modules

	# Install node deps
	npm install

	# Install composer deps - requires php7.2
	composer install

	# Running gulp
	gulp deploy

deploy:
	make all
