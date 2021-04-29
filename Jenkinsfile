pipeline {
    agent none

    stages {
        stage('build') {
           agent any
           steps: {
                sh 'su - admin'
           },
           steps {
                withCredentials([usernameColonPassword(credentialsId: 'patrick.mengual', variable: '')]) {
                    sh 'whoami'
                    sh 'sudo su'
                    sh 'apt update'
                    sh 'apt install software-properties-common'
                    sh 'add-apt-repository ppa:ondrej/php'
                    sh 'apt update'
                    sh 'apt install php8.0 libapache2-mod-php8.0'
               }
           }
        }
        stage('Prepare') {
            steps {
                sh 'php'
           }
        }
        stage('Test'){
            steps {
                sh 'php --version'
            }
        }
    }
}