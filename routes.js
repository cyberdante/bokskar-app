/* eslint-disable new-cap */
const router = require('express').Router();

// Route for health test
router.get('/health', (req, res) => res.status(200).end());

// Route for home page
router.get('/', (req, res) => res.render('home'));

module.exports = router;
