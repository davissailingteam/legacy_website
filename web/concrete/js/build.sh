find ccm_app/*.js -type f -exec cat {} \; -exec echo "" \; > ccm.app.js
cp ccm_app/__bootstrap.twipsy.js ./bootstrap.twipsy.js
cp ccm_app/_bootstrap.popover.js ./bootstrap.popover.js