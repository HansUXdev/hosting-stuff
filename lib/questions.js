const questions = [
  {
    type : 'input',
    name : 'domain',
    message : 'Enter domain ..'
  },
  {
    type : 'input',
    name : 'server',
    message : 'Enter ip ..'
  }

];

const dnsQuestions = [
  {
    type : 'input',
    name : 'domain',
    message : 'Enter domain (s)..'
  }
];

module.exports = {   
  questions,
  dnsQuestions
};