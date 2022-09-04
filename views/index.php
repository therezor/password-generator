<?php

return <<<ENDOFVIEW
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive product landing page.">
    <title>Password Generator. Strong and memorable passwords.</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@2.1.0/build/pure-min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@2.1.0/build/grids-responsive-min.css">
    <link rel="stylesheet" href="/styles.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <script src="/main.js"></script>
</head>
<body>
<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head">Strong and memorable password generator</h1>
        <form id="generate-password" class="pure-form"
              onsubmit="event.preventDefault();generatePassword();return false;">
            <div class="pure-g">
                <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-3-4">
                    <div class="input-group">
                        <input id="generated" type="text" placeholder="Generate password...">
                        <i class="copy-button" title="Copy" onclick="copyPassword();return false;">
                            <svg class="icon-copy" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                <path d="M433.941 65.941l-51.882-51.882A48 48 0 0 0 348.118 0H176c-26.51 0-48 21.49-48 48v48H48c-26.51 0-48 21.49-48 48v320c0 26.51 21.49 48 48 48h224c26.51 0 48-21.49 48-48v-48h80c26.51 0 48-21.49 48-48V99.882a48 48 0 0 0-14.059-33.941zM266 464H54a6 6 0 0 1-6-6V150a6 6 0 0 1 6-6h74v224c0 26.51 21.49 48 48 48h96v42a6 6 0 0 1-6 6zm128-96H182a6 6 0 0 1-6-6V54a6 6 0 0 1 6-6h106v88c0 13.255 10.745 24 24 24h88v202a6 6 0 0 1-6 6zm6-256h-64V48h9.632c1.591 0 3.117.632 4.243 1.757l48.368 48.368a6 6 0 0 1 1.757 4.243V112z"/>
                            </svg>
                        </i>

                    </div>
                </div>

                <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                    <button type="submit" class="pure-button pure-button-primary">Generate password</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="content-wrapper">
    <div class="content">
        <div class="pure-form pure-form-stacked">
            <div class="l-box-h">
                <h3 class="content-subhead">Password settings</h3>
            </div>

            <div class="pure-g">
                <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
                    <label for="words">Word count</label>
                    <div class="pure-slider">
                        <div class="pure-g">
                            <input id="words" name="words" class="pure-input-1" form="generate-password" type="range" min="2" max="9" step="1" value="3">
                            <div id="words-value" class="pure-value"></div>
                        </div>
                    </div>
                </div>
                <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                    <label for="separator">Separator</label>
                    <select id="separator" class="pure-input-1" name="separator" form="generate-password">
                        <option value="" selected></option>
                        <option value="-">-</option>
                        <option value=",">,</option>
                        <option value=".">.</option>
                        <option value="|">|</option>
                        <option value="+">+</option>
                        <option value="@">@</option>
                        <option value="!">!</option>
                    </select>
                </div>
                <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                    <div class="pure-g">
                        <div class="pure-u-1-2">
                            <div class="pure-controls">
                                <label for="caps" class="pure-checkbox">
                                    <input type="checkbox" id="caps" checked>Capitalize
                                </label>
                            </div>
                        </div>
                        <div class="pure-u-1-2">
                            <div class="pure-controls">
                                <label for="numbers" class="pure-checkbox">
                                    <input type="checkbox" id="numbers" checked>Numbers
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="l-box">
             <h2 class="content-head is-center">The most secure password generator that are memorable</h2>
             <p>
                Everyone knows they should use strong and unique passwords, but it's tough to memorize them all. PasswordMaker lets you easily create secure passwords using a master password, then generate unique and strong passwords for each site.
             </p>
        </div>
        
        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
               <h3 class="content-subhead">Strong and secure algorithm</h3>
                <p>
                    A strong password is the first line of defense against a digital intrusion. Our cryptographically secure algorithm is designed to create a password that are too difficult for hackers to crack.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                   Easy to remember
                </h3>
                <p>
                   The key to making most secure password is length. Making passwords more than seven characters makes them too hard to remember. Our algorithm generates new passwords you'll never forget.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    Add text here
                </h3>
                <p>
                     Add text here Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                     Add text here
                </h3>
                <p>
                     Add text here Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                </p>
            </div>
        </div>
    </div>

    <div class="ribbon l-box-lrg">
        <h2 class="content-head content-head-ribbon">We respect your privacy</h2>

        <p>
        Passwords never saved, etc... text
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor.
        </p>
    </div>

    <div class="content">
        <h2 class="content-head is-center">Dolore magna aliqua. Uis aute irure.</h2>
        <div class="l-box-lrg">
            <h4>Some question?</h4>
            <p>
                Answer Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
            </p>

            <h4>Some more question?</h4>
            <p>
                Answer Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>
    </div>

    <div class="footer l-box is-center">
        Copyright notice
    </div>
</div>
</body>
</html>
ENDOFVIEW;
