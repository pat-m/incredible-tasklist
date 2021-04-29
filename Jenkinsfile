pipeline {
    agent any

    stages {
        stage('Clone sources') {
           steps {
                sh 'php --version'
                sh 'composer install'
                sh 'composer --version'
           }
        }
        stage('Prepare') {
            steps {
                sh 'php --version'
           }
        }
        stage('Test'){
            steps {
                sh 'php --version'
            }
        }
    }
}