pipeline {
    agent any

    stages {
        stage('build') {
           steps {
                sh 'sudo su -s /bin/bash jenkins'
                sh 'whoami'
                sh 'sudo apt install software-properties-common'
                sh 'sudo add-apt-repository ppa:ondrej/php'
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