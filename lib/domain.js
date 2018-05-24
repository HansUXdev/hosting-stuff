const mongoose = require('mongoose');
const assert = require('assert'); // N.B: Assert module comes bundled with NodeJS.
mongoose.Promise = global.Promise; // Allows us to use Native promises without throwing error.
// for browser stuff.
const puppeteer = require('puppeteer');

// Connect to a single MongoDB instance. The connection string could be that of remote server
// We assign the connection instance to a constant to be used later in closing the connection
const db = mongoose.connect('mongodb://localhost:27017/hosting-manager', {useMongoClient: true});

// Define a contact Schema
const domainSchema = mongoose.Schema({
  domain: { type: String, },
  ip: { type: String, },
});

/**
 * @var  [Domain]
 * Defines model as an interface with the database
 */
const Domain = mongoose.model('Domain', domainSchema);

/**
 * @function  [addDomain]
 * @adds a domain to an {array} for a client / customer
 */
const addDomain = (domain) => {
  Domain.create(domain, (err) => {
    assert.equal(null, err);
    console.info('New domain added');
    db.close();
  });
};



/**
 * @function  [dnsDomain]
 * @returns {array} Status
 * @should accept and array of domains and check their dns records
 */
const dnsDomain = (domains) => {
	async ()=>{
		let promises = [];
		let searchINPUTSelector = '#q';
		let searchSelector = '#s';
  	puppeteer.launch({headless: false})
  	.then(async browser =>{
  		console.log(domains);
  		// let pages = await browser.pages();
  		// for(let i = 0; i < domains.length; i++){
    //         promises.push(
    //           browser.newPage().then(
    //             async page => {
    //               console.log('seco'domains);
    //               await pages[i].goto(`https://www.whatsmydns.net/#A/${domains.domain}`)
    //                 .then( ()=> {return console.log(`going to ${domains.domain} to check the a records`) });
    //             }
    //           )
    //         )
  		// }//end for loop
  		// await Promise.all(promises)
    //       // browser.close();
  	})
  }
};

// Export all methods
module.exports = {   
  addDomain, 
  dnsDomain
};
