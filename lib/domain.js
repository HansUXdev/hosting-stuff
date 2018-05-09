const mongoose = require('mongoose');
const assert = require('assert'); // N.B: Assert module comes bundled with NodeJS.
mongoose.Promise = global.Promise; // Allows us to use Native promises without throwing error.

// Connect to a single MongoDB instance. The connection string could be that of remote server
// We assign the connection instance to a constant to be used later in closing the connection
const db = mongoose.connect('mongodb://localhost:27017/hosting-manager');

// Define a contact Schema
const contactSchema = mongoose.Schema({
  domain: { type: String, },
  lastname: { type: String, },
  phone: { type: String, },
  email: { type: String, }
});

// Define model as an interface with the database
const Domain = mongoose.model('Domain', contactSchema);

/**
 * @function  [addContact]
 * @returns {String} Status
 */
const addDomain = (domain) => {
  Domain.create(domain, (err) => {
    assert.equal(null, err);
    console.info('New domain added');
    db.disconnect();
  });
};