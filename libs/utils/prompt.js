const chalk = require('chalk');
const inquirer = require('inquirer');
const figures = require('figures');

const question = {
    type: 'confirm',
    name: 'continueWithDeploy',
    message: 'You are about to deploy to the published theme. Continue?',
    default: true,
    prefix: chalk.yellow(`${figures.warning} `),
};

module.exports = async function continueIfPublishedTheme() {
    const answer = await inquirer.prompt([question]);
    return answer.continueWithDeploy;
};
