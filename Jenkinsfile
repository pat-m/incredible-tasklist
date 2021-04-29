pipeline {
    agent { docker { image 'php' } }

    stages {
        stage('build') {
           steps {
                sh 'php --version'
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