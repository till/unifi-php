## unifi-php

If you happen to forget your password for your unifi, this is what you have to use.

 1. PHP
 2. ext/mongo (`brew install php54-mongo`)
 3. Start the UniFi controller (before of conflicts on port 8080)
 4. Run `./script.php`

Script will also output other MongoDB collections from the database. Happy poking!

### Take aways

 * UniFi runs MongoDB.
 * UniFi saves passwords in plaintext.
