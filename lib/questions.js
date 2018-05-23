const questions = [
  {
    type : 'input',
    name : 'domain',
    message : 'Enter domain ..'
  },
  {
    type : 'input',
    name : 'ip',
    message : 'Enter ip ..'
  }

];

const dnsQuestions = [
  {
    type : 'input',
    name : 'domain',
    message : 'Enter domain (s)..'
  },
  {
    type : 'input',
    name : 'record',
    message : 'Enter the record type..'
  }

];

module.exports = {   
  questions,
  dnsQuestions
};