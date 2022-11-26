<?php

return <<<ENDOFVIEW
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Best Memorable Password Generator ever that is completely free. Easily create secure, unique and strong passwords in no time.">
    <title>🔐 The Best Memorable Password Generator ever!</title>
    <link rel="stylesheet" href="/pure-min.css">
    <link rel="stylesheet" href="/grids-responsive-min.css">
    <link rel="stylesheet" href="/styles.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <script src="/main.js"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SGKZ4YPZWT"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-SGKZ4YPZWT');
    </script>
</head>
<body>
<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head">Memorable Password Generator</h1>
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
                            <input id="words" name="words" class="pure-input-1" form="generate-password" type="range"
                                   min="2" max="9" step="1" value="3">
                            <div id="words-value" class="pure-value"></div>
                        </div>
                    </div>
                </div>
                <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                    <label for="separator">Separator</label>
                    <select id="separator" class="pure-input-1" name="separator" form="generate-password">
                        <option value=""></option>
                        <option value="-" selected>-</option>
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
                Everyone knows they should use strong and unique passwords, but it's tough to memorize them all.
                Memorable password generator lets you easily create secure, unique and strong passwords for each site.
            </p>
        </div>

        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">Strong and Secure Algorithm</h3>
                <p>
                    If you are someone who has trouble coming up with passwords that are both strong and easy to
                    remember, then the Memorable Password Generator is the perfect solution for you. This tool creates
                    passwords that are both random and complex, making them difficult to guess or hack. Simply enter the
                    desired word count, letters, numbers, and symbols you need, and then it will do the rest.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    Easy to Remember
                </h3>
                <p>
                    When it comes to creating passwords, most people opt for something that is easy to remember.
                    However, these passwords are often not very secure. A better option is to use a memorable password
                    generator. This will create a password that is both easy to remember and more secure than a regular
                    random character set.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    Fit Anywhere
                </h3>
                <p>
                    The password generator is a tool that helps create strong, unique passwords for different websites,
                    applications, and devices. Some people use the same password for everything, which is not secure. If
                    one account is hacked, all the others are vulnerable as well. By using unique passwords for every
                    device and application you have you can mitigate the chance of being hacked.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    Strong Secure Random
                </h3>
                <p>
                    Our password generator generates long, random passwords that are difficult to crack.
                <ol>
                    <li>Generated passwords are never saved</li>
                    <li>An infinite amount of time would be required for someone to break your password</li>
                </ol>
                </p>
            </div>
        </div>
    </div>

    <div class="ribbon l-box-lrg">
        <div class="content">
            <h2 class="content-head content-head-ribbon">We Respect Your Privacy</h2>

            <p>
                At Memorable Password Generator, we respect your privacy. We understand that you may have concerns about
                how your personal information is used and shared, and we are committed to protecting your privacy.
            </p>
            <p>
                Here are some of the ways we respect your privacy:
            <ul>
                <li>
                    The password is random and never saved by the tool, so if the password is not copied or saved by you
                    it can not be recovered
                </li>
                <li>
                    None of the information you input is gathered
                </li>
                <li>
                    We do not use cookies on this website
                </li>
            </ul>
            </p>
        </div>
    </div>

    <div class="content">
        <h2 class="content-head is-center">Frequently Asked Questions</h2>
        <div class="l-box-lrg">
            <h4>Why Should I Use Memorable Password Generator?</h4>
            <p>
                The Memorable Password Generator website is here to help you create strong, memorable passwords! No more
                worries about forgetting your login information - this site will make sure you have a password that's
                both easy to remember and difficult to crack. The site offers a variety of features that make it easy
                for users to create unique passwords that will be difficult for hackers to guess. You can choose from a
                variety of different characters and symbols to create a password that's totally secure.
            </p>
            <br>

            <h4> How does the Memorable Password Generator Work?</h4>
            <p>
                When you visit the Memorable Password Generator website, you'll see a simple form. To create a password,
                all you need to do is enter a few pieces of information. First, choose how long you want your password
                to be. Then, select which characters you want to use in your password. You can choose from lowercase
                letters, uppercase letters, numbers, and special characters. Finally, click the "Generate Password"
                button.
            </p>
            <p>
                Once you've clicked the button, a random password will be generated for you. This password will be made
                up of the characters that you selected. If you're happy with the password, simply copy it and paste it
                into whatever text field you need it for. If not, just click the "Generate Password" button again and a
                new password will be created.
            </p>
            <br>

            <h4>Can I use this tool only on the web browser?</h4>
            <p>
                The tool is designed to work on the web browser and doesn’t require any installation. You can generate
                passwords on any device with a web browser including your computer, phone, or tablet.
            </p>
            <br>

            <h4>What are the Password Security Risks to a Business or Corporation?</h4>
            <p>
                According to a recent study, nearly 60% of corporate users have easy-to-guess passwords. This is a
                serious security risk for companies, as easy passwords can be easily guessed by hackers.
            </p>
            <p>
                There are a few reasons why corporate users might have easy passwords. First, many people simply choose
                passwords that are easy to remember, without thinking about the security risks.
            </p>
            <p>
                This is a serious problem because it means that hackers can easily gain access to corporate networks.
                Once they're in, they can wreak havoc on the system, stealing sensitive data or planting malware.
            </p>
            <br>

            <h4>Is Memorable Password Generator Free?</h4>
            <p>
                The Password Generator is completely free. And if you need more than one, it can generate as many as you
                like for all your devices and online applications.
            </p>
            <br>

            <h4>How many passwords can I generate?</h4>
            <p>
                You can generate as many passwords as you want with this tool. There is no limit to the number of
                passwords that you can create. This tool can help you create strong, unique passwords that are difficult
                to guess.
            </p>
        </div>
    </div>

    <div class="footer l-box is-center">
        Memorable password generator © 2022
    </div>
</div>
</body>
</html>
ENDOFVIEW;
