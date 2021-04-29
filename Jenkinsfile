pipeline {
    agent any

    stages {
        stage('build') {
           steps {
                sh 'apt update'
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