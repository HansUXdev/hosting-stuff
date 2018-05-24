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
  server: { type: String, },
});


// const getDomains = require('./domains/getDomains.js');

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
 * @function  [getDomain]
 * @returns {Json} domains
 */
const getDomainList = (name) => {
  Domain.find()
  .exec((err, domain) => {
    assert.equal(null, err);
    console.info(domain);

    console.info(`${domain.length} matches`);
    db.close();
  })
}

const getDomainProp = (name) => {
  Domain.find()
  .exec((err, domain) => {
    // assert.equal(null, err);
    // console.info(domain);
    console.info(domain[0].domain);

    // check dns for each domain
    (async () => {
      let promises=[];
      let searchINPUTSelector = '#q';
      let searchSelector = '#s';

      // pull some strings
      puppeteer.launch({timeout: 0,headless: false, slowMo: 50 })
      .then(async browser => {
        let pages = await browser.pages();
        for(let i = 0; i < domain.length; i++){
          promises.push(
            browser.newPage().then(
              async page => {
                await page.goto(`https://www.whatsmydns.net/#A/${domain[i].domain}`)
                  .then( ()=> {return console.log(`going to ${domain[i].domain} to check the a records`) });
              }
            )
          )
        }
        await Promise.all(promises)
      });
      await browser.close();
      //end puppeteer
    })();

    console.info(`${domain.length} matches`);
    db.close();
  })
}


const getSecuri = (name) => {
  Domain.find()
  .exec((err, domain) => {
    // assert.equal(null, err);
    // console.info(domain);
    console.info(domain[0].domain);

    // check dns for each domain
    (async () => {
      let promises=[];
      let searchINPUTSelector = '#q';
      let searchSelector = '#s';

      // pull some strings
      puppeteer.launch({timeout: 0,headless: false, slowMo: 50 })
      .then(async browser => {
        let pages = await browser.pages();
        for(let i = 0; i < domain.length; i++){
          promises.push(
            browser.newPage().then(
              async page => {
                await page.goto(`https://sitecheck.sucuri.net/results/${domain[i].domain}`)
                  .then( ()=> {return console.log(`going to ${domain[i]}.domain`) });
                // await page.goto(`https://www.whatsmydns.net/#A/${domain[i].domain}`)
                  // .then( ()=> {return console.log(`going to ${domain[i].domain} to check the a records`) });
              }
            )
          )
        }
        await Promise.all(promises)
      });
      await browser.close();
      //end puppeteer
    })();

    console.info(`${domain.length} matches`);
    db.close();
  })
}

// Export all methods
module.exports = {   
  addDomain, 
  // dnsDomain,
  getDomainList,
  getDomainProp,
  getSecuri
};
