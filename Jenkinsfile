pipeline {
    agent none

    stages {
        stage('build') {
           agent any
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