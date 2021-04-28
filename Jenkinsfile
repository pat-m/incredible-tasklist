repositoryUrl = "https://gitlab.com/pat-m/incredible-tasklist/"
branch = "master"

pipeline {
    agent any

    stages {
        stage('Clone sources') {
           steps {
                git url: repositoryUrl, credentialsId: "deploy", branch: branch
           },
           steps {
                echo 'Notify GitLab'
                updateGitlabCommitStatus name: 'build', state: 'pending'
                updateGitlabCommitStatus name: 'build', state: 'success'
           }
        }
        stage('Prepare') {
            steps {
                sh 'rm -rf app/build/api'
                sh 'rm -rf app/build/code-browser'
                sh 'rm -rf app/build/coverage'
                sh 'rm -rf app/build/logs'
                sh 'rm -rf app/build/pdepend'
                sh 'rm -rf app/build/phpdox'
                sh 'mkdir -p app/build/api'
                sh 'mkdir -p app/build/code-browser'
                sh 'mkdir -p app/build/coverage'
                sh 'mkdir -p app/build/logs'
                sh 'mkdir -p app/build/pdepend'
                sh 'mkdir -p app/build/phpdox'
                sh 'php composer.phar self-update'
                sh 'php composer.phar install --prefer-dist --no-progress'
            }
        }
        stage('Test'){
            steps {
                sh 'bin/phpunit -c app/phpunit.xml || exit 0'
                step([
                    $class: 'XUnitBuilder',
                    thresholds: [[$class: 'FailedThreshold', unstableThreshold: '1']],
                    tools: [[$class: 'PHPUnitJunitHudsonTestType', pattern: 'app/build/logs/phpunit.xml']]
                ])
                publishHTML([allowMissing: false, alwaysLinkToLastBuild: false, keepAll: false, reportDir: 'app/build/coverage', reportFiles: 'index.html', reportName: 'Coverage Coverage', reportTitles: ''])
            }
        }
    }
}