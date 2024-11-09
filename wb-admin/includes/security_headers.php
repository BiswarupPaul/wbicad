<?php
function setSecurityHeaders() {

    header("X-Frame-Options: SAMEORIGIN", true);

    header("Content-Security-Policy: frame-ancestors 'self'", true);
    
    header("Strict-Transport-Security: max-age=31536000; includeSubDomains", true);

    
    header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0", true);

    
    header("Access-Control-Allow-Origin: *", true);

   
    if (PHP_VERSION_ID >= 70300) {
        setcookie(session_name(), session_id(), [
            'expires' => ini_get("session.cookie_lifetime"),
            'path' => ini_get("session.cookie_path"),
            'domain' => ini_get("session.cookie_domain"),
            'secure' => true, // Secure flag
            'httponly' => true, // HttpOnly flag
            'samesite' => 'Strict' // SameSite flag
        ]);
    } else {
        setcookie(session_name(), session_id(), ini_get("session.cookie_lifetime"), 
                  ini_get("session.cookie_path").'; HttpOnly; Secure; SameSite=Strict', 
                  ini_get("session.cookie_domain"), true, true);
    }

}
?>
