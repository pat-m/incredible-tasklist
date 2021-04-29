pipeline {
    agent any

    stages {
        stage('build') {
           steps {
                sh 'sudo su -s /bin/bash jenkins'
                sh 'sudo apt install software-properties-common'
                sh 'sudo add-apt-repository ppa:ondrej/php'
                sh 'sudo apt update'
                sh 'sudo apt install php8.0 -y'
                sh 'sudo apt install libapache2-mod-php8.0 -y'
                sh 'sudo apt install php8.0-mysql -y'
                sh 'sudo apt install apache2 -y'
                sh 'ls'
                sh 'cd /etc/apache2'
                sh 'apache2ctl configtest'
                sh 'sudo ufw allow "Apache"'
                sh 'sudo ufw status'
                sh 'sudo systemctl status apache2.service -l --no-pager'
                sh 'sudo apt autoremove -y'

//                 sh 'sudo apachectl -M'
//                 sh 'sudo a2dismod php'
//                 sh 'sudo a2dismod php7'
//                 sh 'sudo a2enmod php8.0'
                sh 'ls'
           }
        }
        stage('Prepare') {
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