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
  }
];

module.exports = {   
  questions,
  dnsQuestions
};