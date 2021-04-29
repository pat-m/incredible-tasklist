pipeline {
    agent any

    stages {
        stage('build') {
           steps {
                sh "php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
                sh "sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer"
                sh "php -r "unlink('composer-setup.php');"
                sh "sudo chown -R $USER:$USER ~/.composer/"
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