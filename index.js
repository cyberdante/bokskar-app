const express = require('express');
const app = express();
const exphbs = require('express-handlebars');
const routes = require('./routes');
const favicon = require('serve-favicon');
const winston = require('winston');
const expressWinston = require('express-winston');

const port = process.env.PORT || 3000;
const host = process.env.HOST || '0.0.0.0';

// Setup favicon serving
app.use(favicon(`${__dirname}/app/favicon.ico`));

// Setup logging
app.use(expressWinston.logger({
  transports: [
    new winston.transports.Console({
      colorize: true
    })
  ],
  meta: true,
  expressFormat: true,
  colorize: true
}));

app.engine('.hbs', exphbs({
  defaultLayout: 'main',
  extname: '.hbs',
  partialsDir: 'app/views/partials/',
  layoutsDir: 'app/views/layouts/'
}));
app.set('views', 'app/views');
app.set('view engine', '.hbs');
app.set('x-powered-by', false);

if (process.env.NODE_ENV === 'development') {
  app.use('/app/styles', express.static('app/styles'));
  app.use('/app/scripts', express.static('app/scripts'));
}

app.use('/', routes);

app.listen(port, host, () => {
  console.log(`Example app listening on port ${port}!`);
});
