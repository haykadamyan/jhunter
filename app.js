var express = require('express');
var path = require('path');
var favicon = require('serve-favicon');
var logger = require('morgan');
var cookieParser = require('cookie-parser');
var bodyParser = require('body-parser');
var Mailgun = require('mailgun').Mailgun;
var mg = new Mailgun('key-abf16f0695de393ba5cc72ac51a2ccaf');

var routes = require('./routes/index');
var users = require('./routes/users');

var app = express();

// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');

// uncomment after placing your favicon in /public
//app.use(favicon(path.join(__dirname, 'public', 'favicon.ico')));
app.use(logger('dev'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));

app.use('/', routes);
app.use('/users', users);
app.get('/sendmail', function(req, res){
  var data = {from: req.query.from, to: req.query.to, phone: req.query.phone, email: req.query.email || "empty", box: req.query.box || "off", message: req.query.message || "off", other: req.query.other || "off"};

//  var transporter = nodemailer.createTransport();
//  transporter.sendMail({
//    from: 'customer@thejhunter.com',
//    to: 'drprog00@gmail.com',
//    cc: "artashes.vardanyan@gmail.com",
//    subject: 'New order',
//    html: "Որտեղից - " + data.from + "<br>Որտեղ - " + data.to + "<br>Հեռախոսահամար - " + data.phone + "<br>Էլ. հասցե - " + data.email + "<br>Փաթեթ - " + data.box + "<br>Ծրար - " + data.message + "<br>Այլ - " + data.other
//});
var message = "Որտեղից - " + data.from + "<br>Որտեղ - " + data.to + "<br>Հեռախոսահամար - " + data.phone + "<br>Էլ. հասցե - " + data.email + "<br>Փաթեթ - " + data.box + "<br>Ծրար - " + data.message + "<br>Այլ - " + data.other;

  mg.sendRaw('customer@thejhunter.com',
      ['drprog00@gmail.com'],
      'From: customer@thejhunter.com' +
      '\nTo: ' + 'drprog00@gmail.com, artashes.vardanyan@gmail.com' +
      '\nContent-Type: text/html; charset=utf-8' +
      '\nSubject: New order'+
      '\n\n'+message,
      function(err) { err && console.log(err) });
  res.render('index', {ordered: true});

});
// catch 404 and forward to error handler
app.use(function(req, res, next) {
  var err = new Error('Not Found');
  err.status = 404;
  next(err);
});

// error handlers

// development error handler
// will print stacktrace
if (app.get('env') === 'development') {
  app.use(function(err, req, res, next) {
    res.status(err.status || 500);
    res.render('error', {
      message: err.message,
      error: err
    });
  });
}

// production error handler
// no stacktraces leaked to user
app.use(function(err, req, res, next) {
  res.status(err.status || 500);
  res.render('error', {
    message: err.message,
    error: {}
  });
});


module.exports = app;
