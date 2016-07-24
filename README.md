### Description
The WikiBouncer extension allows white-listing of certain domains upon account registration while black-listing the rest. This is good choice for private, account protected MediaWiki installations where you don't want users outside of your organization to register for an account.

### Installation
1. Download a zipped version of this repository (or clone it using git) and place the `WikiBouncer` folder inside the MediaWiki `extensions` folder.

2. Add the following to your `LocalSettings.php`
```
# Set up the WikiBouncer plugin for whitelisting domains.
wfLoadExtension("WikiBouncer");
$wgAllowedEmailDomains = array("example.com", "example.org");
```
And change the domains to your liking.

3. Give yourself a thumbs up, cause you're done!
