# Hosting Stuff
hs aka hosting stuff is a command line tool hosting management system built with Node.js, MongoDB, Commanderjs, and Inquirerjs. It allows you to `create` and `manage` your hosting from the command line.


## Prerequisites
1. Install [Node.js](https://nodejs.org/en/)
2. Install [MongoDB](https://www.mongodb.org/downloads/)
3. Install [Mongoose](http://mongoosejs.com/)
4. Install [Commanderjs](https://github.com/tj/commander.js)
5. Install [Inquirerjs](https://github.com/SBoudrias/Inquirer.js/)


## Installation
1. Clone the repository [here](https://github.com/mentrie/contacto)
2. Navigate to your terminal and change your directory to the `contacto`.
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

## Example
```
hs d              // adds domain to db
hs s -a           // runs a security check on all domains in db
hs dns -p -a      // checks propogation of all domains
hs ssl -c -a      // checks the ssl certs on all domain
```

Add thoughts to the issue and feel free to fork/etc.
