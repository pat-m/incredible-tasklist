pipeline {
    agent any

    stages {
        stage('build') {
           steps {
                sh 'sudo su -s /bin/bash jenkins'
                sh 'whoami'
                sh 'sudo apt install software-properties-common'
                sh 'sudo add-apt-repository ppa:ondrej/php'
                sh 'sudo apt update'
                sh 'sudo apt install php8.0 -y'
                sh 'sudo apt install libapache2-mod-php8.0 -y'
                sh 'sudo apt install php8.0-mysql -y'
                sh 'sudo apt install apache2 libapache2-mod-wsgi python-dev -y'
                sh 'sudo systemctl status apache2'
                sh 'sudo a2enmode php8.0'
                sh 'sudo systemctl restart apache2'
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