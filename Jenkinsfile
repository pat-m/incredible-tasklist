pipeline {
    agent none

    stages {
        stage('build') {
           agent any
           steps {
                sh 'su - admin'
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