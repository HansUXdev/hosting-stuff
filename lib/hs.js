#!/usr/bin/env node

const program = require('commander');
const { prompt } = require('inquirer');
const { questions } = require('./questions.js');

const { 
  addDomain, 
  // getContact, 
  // addMultipleContacts, 
  // getContactList,
  // updateContact,
  // deleteContact  
} = require('./domain'); 

program
  .version('0.0.1')
  .description('Hosting management system')

program
  .command('addDomain')
  .alias('a')
  .description('Add Domain')
  .action(() => {
    prompt(questions).then((answers) =>
      addContact(answers));
  });

// Assert that a VALID command is provided 
if (!process.argv.slice(2).length || !/[arudl]/.test(process.argv.slice(2))) {
  program.outputHelp();
  process.exit();
}
program.parse(process.argv)
    