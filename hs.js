#!/usr/bin/env node

const program = require('commander');
const { prompt } = require('inquirer');

const { 
	questions, 
	dnsQuestions 
} = require('./lib/questions.js');

const { 
  addDomain, 
  // dnsDomain,
  getDomainList,
  getDomainProp,
  getSecuri
  // updateDomains,
  // deleteDomains  
} = require('./lib/domain.js'); 

program
  .version('0.0.1')
  .description('Hosting management system')

// adds a domain to the db
program
  .command('addDomain')
  .alias('add')
  .description('Add Domain')
  // Ask some questions about the domain
  .action(() => {
    prompt([{
      type : 'input',
      name : 'domain',
      message : 'Enter domain ..'
    },
    {
      type : 'input',
      name : 'server',
      message : 'Enter Server Name ..'
    }
  ])
  // then store the answers in the db with the addDomain function
  .then((answers) =>
      // console.log(answers);
      addDomain(answers));
  });

// check the dns records of a domain (dns propogation / history)
// program
//   .command('dnsDomain')
//   .alias('dns')
//   .description('Checking Domain dns')
//   .action(() => {
//     prompt(dnsQuestions).then((answers) =>
//       dnsDomain(answers));
//   });


// get domains and check dns propogation for all of them
program
  .command('getDomains')
  .alias('list')
  .description('Get Domains')
  .action( 
    () => getDomainList() 
  );


// get domains and check dns propogation for all of them
program
  .command('getDomains')
  .alias('dnsbulk')
  .description('Get Domains')
  .action( 
    () => getDomainProp() 
  );

// get domains and check dns propogation for all of them
program
  .command('getSecuri')
  .alias('securi')
  .description('Basic Bulk Security Check')
  .action( 
    () => getSecuri() 
  );


// console.log(`process:${process.argv}`);

// Assert that a VALID command is provided 
if (!process.argv.slice(2).length || !/[arudl]/.test(process.argv.slice(2))) {
  program.outputHelp();
  process.exit();
}
program.parse(process.argv)
    