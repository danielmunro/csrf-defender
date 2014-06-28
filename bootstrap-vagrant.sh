#!/usr/bin/env bash

composer global require "phpunit/phpunit=4.1.*"
echo 'PATH="~/.composer/vendor/bin:$PATH"' | tee -a ~/.bashrc
