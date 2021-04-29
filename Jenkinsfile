pipeline {
    agent any

    stages {
        stage('build') {
           steps {
                sh 'ansible -v'
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