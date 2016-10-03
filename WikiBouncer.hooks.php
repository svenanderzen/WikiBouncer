<?php

/**
 *
 * Hooks for the WikiBouncer extension.
 *
 */

class WikiBouncerHooks {

    public static function onAbortNewAccount($user, &$message) {
        global $wgRequest;
        global $wgAllowedEmailDomains;

        $emailDomain = explode("@", $wgRequest->getText("email"), 2)[1];

        if (!empty($emailDomain)) {
            foreach ($wgAllowedEmailDomains as $allowedEmailDomain) {
                if ($emailDomain === $allowedEmailDomain) {
                    return true;
                }
            }
        }

        $message = "The provided domain " . $emailDomain . " is blocked for account registration.";

        return false;
    }

}

