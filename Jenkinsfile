pipeline {
    agent any

    stages {
        stage('build') {
           steps {
                sh 'sudo apt update'
                sh 'sudo apt install software-properties-common'
                sh 'sudo add-apt-repository ppa:ondrej/php'
                sh 'sudo apt update'
                sh 'sudo apt install php8.0 libapache2-mod-php8.0'
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