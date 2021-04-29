pipeline {
    agent any

    stages {
        stage('Prepare requisite') {
           steps {
                sh 'sudo su -s /bin/bash jenkins'
                sh 'sudo apt install software-properties-common'
                sh 'sudo add-apt-repository ppa:ondrej/php'
                sh 'sudo apt update'
                sh 'sudo apt install php8.0 -y'
                sh 'sudo apt install php-cli unzip zip'
                sh 'php --version'
                sh 'cd /usr/local/bin'
                sh 'php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
                    php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
                    php composer-setup.php
                    php -r "unlink('composer-setup.php');"'
                sh 'cd'
                sh 'composer -v'
                sh 'sudo apt install nodejs -y'
                sh 'sudo apt install npm'
                sh 'node -v'
                sh 'npm -v'
                sh 'sudo apt install libapache2-mod-php8.0 -y'
                sh 'sudo apt install php8.0-mysql -y'
//                 sh 'sudo apt install apache2 -y'
//                 sh 'ls'
//                 sh 'cd /etc/apache2'
//                 sh 'apache2ctl configtest'
//                 sh 'sudo ufw allow "Apache"'
//                 sh 'sudo ufw status'
//                 sh 'sudo systemctl status apache2.service -l --no-pager'
//                 sh 'sudo apt autoremove -y'

//                 sh 'sudo apachectl -M'
//                 sh 'sudo a2dismod php'
//                 sh 'sudo a2dismod php7'
//                 sh 'sudo a2enmod php8.0'
                sh 'ls'
           }
        }
        stage('Build') {
            steps {
                sh 'php'
           }
        }
        stage('Test') {
            steps {
                sh 'php --version'
            }
        }
    }
}