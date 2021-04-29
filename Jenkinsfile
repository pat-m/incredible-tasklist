pipeline {
    agent any

    stages {
        stage('build') {
           steps {
                sh 'sudo su -s /bin/bash jenkins'
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