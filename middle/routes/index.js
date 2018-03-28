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
            // console.log(body);
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
            // console.log(body);
            res.json(body);
        }
    });
});
router.get('/logintest',function(req,res,next){
    var username = req.query.username;
    var password = req.query.password;
    // console.log(username);
    // console.log(password);
    request.get('http://127.0.0.1/bishegogogo/CI/user/loginTest?username='+username+"&password="+password,function(error, response, body){
        if (!error && response.statusCode == 200) {
            // console.log(body);
            res.json(body);
        }
    });
});

router.get('/showusername',function(req,res,next){
    var uid = req.query.value; 
    // console.log(uid);
    request.get('http://127.0.0.1/bishegogogo/CI/user/showUsername?uid='+uid,function(error, response, body){
        if (!error && response.statusCode == 200) {
            console.log(body);
            res.json(body);
        }
    });
})
router.get('/showInformation',function(req,res,next){
    var uid = req.query.value; 
    request.get('http://127.0.0.1/bishegogogo/CI/user/showInformation?uid='+uid,function(error, response, body){
        if (!error && response.statusCode == 200) {
            console.log(body);
            res.json(body);
        }
    });
})
router.get('/changeInformation',function(req,res,next){
    var uid = req.query.uid;
    var ugender = req.query.gender;
    var uage = req.query.age;
    var ucatname = req.query.catname;

    //遇到汉字跨域变值得问题 使用request.post可以避免    
    request.post({url:'http://127.0.0.1/bishegogogo/CI/user/changeInformation',form:{uid:uid,ugender:ugender,uage:uage,ucatname:ucatname}},function(error,response,body){
        if (!error && response.statusCode == 200) {
            // console.log(body);
            res.json(body);
        }
    });
})





module.exports = router;
