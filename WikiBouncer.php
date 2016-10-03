<?php

/**
 *
 * Check that the extension is loaded according to the new MediaWiki extension registration
 * process.
 *
 */

if (function_exists("wfLoadExtension")) {

    wfLoadExtension("WikiBouncer");

    wfWarn(
        "Deprecated PHP entry point used for WikiBouncer extension. Please use wfLoadExtension instead, see https://www.mediawiki.org/wiki/Extension_registration for more details."
    );

    return true;

} else {

    die("This version of the WikiBouncer extension requires MediaWiki 1.25+");

}
