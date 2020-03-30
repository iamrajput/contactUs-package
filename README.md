Contact Us, Laravel Package 2020
=======================

[![Issue](https://img.shields.io/github/issues/iamrajput/contactUs-package.svg?style=flat-square)](https://github.com/iamrajput/contactUs-package/issues)

[![Stars](https://img.shields.io/github/stars/iamrajput/contactUs-package.svg?style=flat-square)](https://github.com/iamrajput/contactUs-package/stargazers)

This package will send mail to the admin and save the users message to the database.

## Installing ContactUS Package

The recommended way to install this package is through
[Composer](https://getcomposer.org/).

```bash
composer require atul/contact-form
```
## Steps

- php artisan vendor:publish
  - Go to the main config folder you can see the contactForm.php set the send_email_to.
  - Set your mail configuration in .env file
  - Set up your database
- php artisan migrate
- http://127.0.0.1:8000/contact (Web link for access the view page)

Congratulation 😉

That's It! You're ready with your contact us setup.

 


