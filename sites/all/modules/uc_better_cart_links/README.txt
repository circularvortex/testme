$Id: README.txt,v 1.1 2010/10/09 13:50:39 ktleow Exp $

-- SUMMARY --

This module enhances Ubercart's standard Cart Links module by generating
encrypted cart links.

How it works is fairly simple. This module uses PHP's Mcrypt
<http://php.net/manual/en/book.mcrypt.php> library to encrypt and decrypt cart
links to reduce the security vulnerabilities as reported here
<http://drupal.org/node/881752>.

Currently there is only a simple administration interface to generate these
encrypted cart links. Developers however can use the function provided by this
module and use it however you want it.

An example to empty the cart, add 5 of product 1 to the cart, and redirect the
user to the cart will be
<a href="http://www.example.com/cart/add/e-p1_q5?destination=cart">Add to cart</a>

When this module is used, the cart link will look like
<a href="http://www.example.com/cart/add/s/iUjbh5D1w2GXt_47_uWv4skt_43_hNB_47_esHeZeIGu7A_43_A9hS4=?destination=cart">Add to cart</a>


-- REQUIREMENTS --

* PHP Mcrypt library.


-- INSTALLATION --

* Install as usual, see http://drupal.org/node/70151 for further information.


-- CONTACT --

Current maintaners:
* Leow Kah Thong (ktleow) - http://drupal.org/user/158465
  http://kahthong.com <leow@kahthong.com>
