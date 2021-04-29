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
                sh 'sudo apt install wget php-cli unzip zip php-zip -y'
                sh 'php --version'
                sh '''php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"'''
                sh '''HASH="$(wget -q -O - https://composer.github.io/installer.sig)" php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"'''
                sh 'sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer'
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