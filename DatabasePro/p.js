
var request = require('request'),
    fs = require('fs'),
    apiKey = 'cbc2fcb80935f9beed17f3d8973c2869e12261a1',
    formData = {
        target_format: 'xslx',
        source_file: fs.createReadStream('a.pdf')
    };

request.post({url:'https://sandbox.zamzar.com/v1/jobs/', formData: formData}, function (err, response, body) {
    if (err) {
        console.error('Unable to start conversion job', err);
    } else {
        console.log('SUCCESS! Conversion job started:', JSON.parse(body));
    }
}).auth(apiKey, '', true);

