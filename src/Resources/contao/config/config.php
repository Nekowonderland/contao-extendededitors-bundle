<?php

/**
 * Web files
 */
if (TL_MODE == 'BE') {
    // Add the JS.
    $GLOBALS['TL_JAVASCRIPT']['eeb_backend_js'] = $GLOBALS['TL_CONFIG']['debugMode']
        ? 'bundles/extendededitors/js/backend.js'
        : 'bundles/extendededitors/js/backend.js';
}
