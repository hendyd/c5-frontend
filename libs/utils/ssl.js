const path = require('path');

function getSSLKeyPath() {
  return path.join(__dirname, './../server.pem');
}

function getSSLCertPath() {
  return path.join(__dirname, './../server.pem');
}

module.exports = {
    getSSLKeyPath,
    getSSLCertPath
};
