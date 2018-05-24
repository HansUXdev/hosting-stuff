const fs        = require('fs');
const yaml      = require('js-yaml');
const puppeteer = require('puppeteer');

// use this for console commands
const exec    = require('child_process').exec;

// let settings  = require('../config_example.js');


// Load settings from settings.yml
const { PORT, DOMAINS, CREDS } = loadConfig();

function loadConfig() {
  let ymlFile = fs.readFileSync('../config_example.yaml', 'utf8');
  return yaml.load(ymlFile);
}



(async () => {

   const puppeteer = require('puppeteer');

    puppeteer.launch(
      {
        timeout: 0, 
        headless: false, // default is true
        slowMo: 50 // slow down by 250ms
      })
      .then(async browser => {
      const promises=[];


      for(let i = 0; i < DOMAINS.length; i++){
        console.log('Page ID Spawned', i)
        /// push a list of commands to each browser instance
        promises.push(
          // let ${currentURLS[i]} =
          browser.newPage().then(
            async page => {
              await page.goto(`https://sitecheck.sucuri.net/results/${DOMAINS[i].url}`)
                .then( ()=> {return console.log(`going to ${DOMAINS[i]}`) });

              // await page.goto('https://www.whatsmydns.net/'+
              //   // check if you have a 
              //   `#${DOMAINS[i].dns ? 'A' : 'NS'}/${DOMAINS[i].url}`
              // );

            }
          )
        )
      }
      await Promise.all(promises)
      // browser.close();
    });
  // await browser.waitFor(3000);

  await browser.close();
})();