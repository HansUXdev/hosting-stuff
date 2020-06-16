# Hosting Stuff
`hs` aka hosting stuff is a command line tool or as i would like it to eventually be, a `Hosting Management System` built with Node.js, MongoDB, Commanderjs, Inquirerjs, etc. 
Not unlike a CRM, a HMS allows you to manage and automate your `hosting stuff and things` from the command line to make clients/customer a little bit easier to deal with...

Whether it is at Godaddy or as a freelancer, it's not uncommon for me to an an email, phone call or text about some WordPress site, being hacked, having a 500 error, or some other problem. My client ofcourse want me to fix it and as do I because, it's my work, but either they cannot pay me (non-profit), they don't want to, or I'm just swampped.

This was built as an semi-automated toolbox, hacked together over weekends in order to solve the most common issues and cut that volunteer work down from a few hours to a few minutes via a 3 step process.

* Analysis -- Automatically analyze all sites in their hosting entironment with puppetter 
(such as bulk security checks across all domain names on their account, automatic screenshots, etc). 
* Diagnose -- Semi-Automatically identify issues (including unknown one's) via php scripts.
* Fix the issue (manual or other wise)

## STATUS
This project is currently **ABANDONED**. I handed off every freelance client I had last year to people who have more time to serve their needs. It does however show a variety of technical skills such as:
* Creative Problem Solving
* Automation of repeatitive tasks
* Advanced knowledge of LAMP stack, managed WordPress/ CPANEL hosting
* Basic database (mongodb) stuff
* Basic CLI creatation

## Background
I'm making this because, I effectively have three jobs. I work at a hosting company, and a behavioral health aka mental hospitol and freelance developer. **The last thing I want to do off the clock, is deal with hosting shit for sites i developed x years ago.** So this project is built around me scripting the exact same things i do on a browser using puppetteer aka `puppetstrings`, then once the proof of concept is working, abstracting that into either a bulk task, & || into a cli tool. Part of this is matter of security vs privacy. If you have a config file such as config.yaml, db, etc then the cx/user info is potentially at risk one way or another, as opposesed when that info is stored in memory (cli) which is much more difficult to obtain but requires more work... 


## Prerequisites
0. Be an actual developer or atleast, someone who googles (not sorry bing, go ```<?php die()?>``` ).
1. Install [Node.js](https://nodejs.org/en/)
2. Install [MongoDB](https://www.mongodb.org/downloads/)
3. Install [Mongoose](http://mongoosejs.com/)
4. Install [Commanderjs](https://github.com/tj/commander.js)
5. Install [Inquirerjs](https://github.com/SBoudrias/Inquirer.js/)
6. install other stuff in package.json and read the dependancies...


## Installation
1. Clone the repository [here](https://github.com/HansUXdev/hosting-stuff)
2. Navigate to your terminal and change your directory to the `hs`.
3. Run `yarn` to install node dependencies.
4. Run `yarn link` to creates a symbolic link between project directory and executable command.

## Usage
```
Usage: hs [options] [command]


  Commands:
    
    addDomain|d           Add a domain(s)
    securityCheck|s       Security Check
    dnsCheck|dns    -p    Check DNS Propogation
    dnsHistory|dns  -h    Check DNS History
    sslCheck|ssl    -c    Check SSL info

  Hosting management system

  Options:

    -h, --help     output usage information
    -V, --version  output the version number
```

## Examples / Uses
```
hs add            // adds a domain to db
hs list           // lists domains in db
hs securi         // runs a security check on all domains in db
hs dnsbulk        // checks propogation of all domains
hs ssl -c -a      // checks the ssl certs on all domain
```
# Add/List Domains
![Alt Text](http://g.recordit.co/qW8AvmWtYr.gif)

# Check DNS Propagation in bulk
![Alt Text](http://g.recordit.co/8GL1r3bN3d.gif)
# Check Website Security in bulk
![Alt Text](http://g.recordit.co/0wVZASTIcr.gif)

## Puppetstring
As the name suggests these are the strings I pull to make sure a site is working properly...



## Other
Add thoughts to the issue and feel free to fork/etc.
