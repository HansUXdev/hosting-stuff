const fs        = require('fs');
const yaml      = require('js-yaml');
const puppeteer = require('puppeteer');

// use this for console commands
const exec    = require('child_process').exec;

// Load settings from settings.yml
const { PORT, DOMAINS, DNS, CREDS } = loadConfig();

function loadConfig() {
  let ymlFile = fs.readFileSync('../config_example.yaml', 'utf8');
  return yaml.load(ymlFile);
}
console.log(DOMAINS);

(async () => {

   const promises=[];
   const searchINPUTSelector = '#q';
   const searchSelector = '#s';

 
    puppeteer.launch(
      {
        timeout: 0,
        // executablePath: '~/Applications/Google Chrome.app',
        headless: false, // default is true
        slowMo: 50 // slow down by 250ms
      })
      .then(async browser => {
        // const page = await browser.newPage();
        let pages = await browser.pages();

        for(let i = 0; i < DOMAINS.length; i++){
          promises.push(
            browser.newPage().then(
              async page => {
                // check a record by default
                await pages[i].goto(`https://www.whatsmydns.net/#A/${DOMAINS[i].url}`)
                  .then( ()=> {return console.log(`going to ${DOMAINS[i].url} to check the a records`) });
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