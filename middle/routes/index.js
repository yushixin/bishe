var express = require('express');
var router = express.Router();
var request = require('request');

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' });
});
router.get('/reg',function(req,res,next){
    var username = req.query.username;
    var password = req.query.password;
    console.log(username);
    console.log(password);
    request.get('http://127.0.0.1/bishegogogo/CI/user/reg?username='+username+"&password="+password,function(error, response, body){
        if (!error && response.statusCode == 200) {
            console.log(body);
            res.json(body);
        }
    });
});
router.get('/usernameTesting',function(req,res,next){
    var username = req.query.username;
    var password = req.query.password;
    // console.log(username);
    // console.log(password);
    request.get('http://127.0.0.1/bishegogogo/CI/user/usernameTesting?username='+username+"&password="+password,function(error, response, body){
        if (!error && response.statusCode == 200) {
            console.log(body);
            res.json(body);
        }
    });
});
router.get('/logintest',function(req,res,next){
    var username = req.query.username;
    var password = req.query.password;
    console.log(username);
    console.log(password);
    request.get('http://127.0.0.1/bishegogogo/CI/user/loginTest?username='+username+"&password="+password,function(error, response, body){
        if (!error && response.statusCode == 200) {
            console.log(body);
            res.json(body);
        }
    });
});

module.exports = router;
