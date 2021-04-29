pipeline {
    agent any

    stages {
        stage('build') {
           steps {
                sh 'composer -version'
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