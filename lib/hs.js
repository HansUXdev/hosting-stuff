#!/usr/bin/env node

const program = require('commander');
const { prompt } = require('inquirer');

const { 
	questions, 
	dnsQuestions 
} = require('./questions.js');

const { 
  addDomain, 
  dnsDomain, 
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
  .alias('d')
  .description('Add Domain')
  .action(() => {
    prompt(questions).then((answers) =>
      addDomain(answers));
  });

// check the dns records of a domain (dns propogation / history)
program
  .command('dnsDomain')
  .alias('dns')
  .description('Checking Domain dns')
  .action(() => {
    prompt(dnsQuestions).then((answers) =>
      dnsDomain(answers));
  });




// Assert that a VALID command is provided 
if (!process.argv.slice(2).length || !/[arudl]/.test(process.argv.slice(2))) {
  program.outputHelp();
  process.exit();
}
program.parse(process.argv)
    