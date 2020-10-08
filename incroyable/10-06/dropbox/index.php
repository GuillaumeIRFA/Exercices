<?php

$darkTheme = false;

if (isset($_GET['darkTheme']) && $_GET['darkTheme'] == "true") {
    $darkTheme = true;
}

$darkThemeCss = "<link rel='stylesheet' href='css/darkTheme.css'>";
$darkThemeTogglerLight = "<a href='index.php' class='btn btn-outline-primary my-sm-0 nav-button mr-2 dark-theme'>Light</a>";
$darkThemeTogglerDark = "<a href='index.php?darkTheme=true' class='btn btn-outline-primary my-sm-0 nav-button mr-2 dark-theme'>Dark</a>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <?= $darkTheme ? $darkThemeCss: null; ?>
    <title>Dropbox</title>
</head>

<body>

    <nav class="navbar navbar-light border-bottom justify-content-between">
        <a href="https://www.dropbox.com/business">
            <img src="img/logo-dropbox.png" alt="">
        </a>
        <form class="form-inline">
            <?= 
                $darkTheme ? $darkThemeTogglerLight : $darkThemeTogglerDark;
            ?>
            <button class="btn btn-outline-primary my-sm-0 nav-button">
                Try free for 30 days
            </button>
        </form>
    </nav>

    <form class="container d-flex flex-column">
        <div class="row">
            <div class="header col-12">
                <h1 class="titre centered">Choose the right Dropbox for you</h1>
                <div class="centered">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Billed yearly                       
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Billed monthly
                        </label>
                    </div>
                </div>

            </div>

        </div>

        <div class="row pricing">
            <div class="col">
                <div class="card d-flex flex-column justify-content-between rounded-0">
                    <div class="card-header border-0 bg-ghostblue">
                        Standard
                    </div>
                    <div class="card-body">
                        <div class="card-title">
                            <h5>€10</h5>
                            <p>
                                / user / month, starting at 3 users
                            </p>
                        </div>
                        <div class="card-text">
                            <ul>
                                <li id="li-storage">
                                    5 TB of space for secure storage
                                </li>
                                <li id="li-tools">
                                    Easy-to-use sharing and collaboration tools
                                </li>
                            </ul>
                        </div>
                        <div class="card-button">
                            <button class="btn btn-outline-primary rounded-0 w-100">
                                        Try free for 30 days
                                    </button>
                            <p class="centered">or <a class="" href="#">purchase now</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card d-flex flex-column justify-content-between rounded-0 iAmRelativelyPositioned">
                    <div class="best-value">BEST VALUE</div>
                    <div class="card-header border-0 bg-dodgerblue text-white">
                        Advanced
                    </div>
                    <div class="card-body bg-ghostblue">
                        <div class="card-title">
                            <h5>€15</h5>
                            <p>
                                / user / month, starting at 3 users
                            </p>
                        </div>
                        <div class="card-text">
                            <ul>
                                <li id="li-needs">
                                    As much space as your team needs
                                </li>
                                <li id="li-features">
                                    Sophistical control and security features
                                </li>
                            </ul>
                        </div>
                        <div class="card-button">
                            <button class="btn bg-dodgerblue text-white rounded-0 w-100">
                                        Try free for 30 days
                                    </button>
                            <p class="centered">or <a class="" href="#">purchase now</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card d-flex flex-column justify-content-between rounded-0">
                    <div class="card-header border-0 bg-ghostblue">
                        Enterprise
                    </div>
                    <div class="card-body">
                        <div class="card-title">
                            <h5 id="last-card-title">Contact us</h5>
                        </div>
                        <div class="card-text">
                            <ul>
                                <li id="li-solutions">
                                    Customizable solutions
                                </li>
                                <li id="li-scale">
                                    Individualized support to help admins manage at scale
                                </li>
                            </ul>
                        </div>
                        <div class="card-button">
                            <button class="btn btn-outline-primary rounded-0 w-100">
                                        Contact us
                                    </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row description">
            <div class="col-4">
                <ul>
                    <li class="desc"><span>180 days of file recovery</span></li>
                    <li class="desc"><span>Single admin login to manage multiple teams</span></li>
                    <li class="desc"><span>Admin console and audit log</span></li>
                    <li class="desc"><span>256-bit AES and SSL/TLS encryption</span></li>
                    <li class="desc"><span>Granular sharing permissions</span></li>
                    <li class="desc"><span>User and company-managed groups</span></li>
                    <li class="desc"><span>Remote device wipe</span></li>
                    <li class="desc"><span>Two-factor authentication (2FA)</span></li>
                    <li class="desc"><span>Send files up to 2 GB with Dropbox Transfer</span></li>
                    <li class="desc"><span>180-day account recovery with Dropbox Rewind</span></li>
                    <li class="desc"><span>File locking</span></li>
                    <li class="desc"><span>Smart Sync</span></li>
                    <li class="desc"><span>Document watermarking</span></li>
                    <li class="desc"><span>Dropbox Paper admin tools</span></li>
                    <li class="desc"><span>Office 365 integration</span></li>
                    <li class="desc"><span>Unlimited API access to security and productivity platform partners</span></li>
                    <li class="desc"><span>1 million API calls/month for data transport partners</span></li>
                    <li class="desc"><span>Priority chat, email and business hours phone support</span></li>
                </ul>
            </div>

            <div class="col-4 border-right border-left">
                <ul>
                    <li class="desc"><span class="font-weight-600">Everything in Standard</span></li>
                    <li class="desc"><span>Advanced admin controls</span></li>
                    <li class="desc"><span>Tiered admin roles</span></li>
                    <li class="desc"><span>Send files up to 100 GB with Dropbox Transfer, including additional customization options</span></li>
                    <li class="desc"><span>Advanced user management tools</span></li>
                    <li class="desc"><span>Single sign on (SSO) integration</span></li>
                    <li class="desc"><span>Invite enforcement</span></li>
                    <li class="desc"><span>Domain verification</span></li>
                    <li class="desc"><span>Device approvals</span></li>
                    <li class="desc"><span>File event tracking</span></li>
                </ul>
            </div>

            <div class="col-4">
                <ul>
                    <li class="desc"><span class="font-weight-600">Everything in Advanced</span></li>
                    <li class="desc"><span>Centralized admin console to view and manage all your Business teams at once</span></li>
                    <li class="desc"><span>Account Capture</span></li>
                    <li class="desc"><span>Network control</span></li>
                    <li class="desc"><span>Enterprise mobility management (EMM)</span></li>
                    <li class="desc"><span>Domain Insights</span></li>
                    <li class="desc"><span>Advanced training for end users and admins</span></li>
                    <li class="desc"><span>24/7 phone support</span></li>
                </ul>
            </div>

        </div>


        <div class="row faq">
            <h3 class="faq-header">Frenquently asked questions</h3>

            <div class="col faq-left-col">

                <div class="card feed">
                    <div class="card-body">
                        <h5 class="card-title">
                            What is a Dropbox Business user?
                        </h5>
                        <p class="card-text">
                            A user is any person or role on your team with a unique email address. Each team member should have his or her own user license. Users can link their Dropbox accounts to as many of their devices as they’d like (PCs, phones, tablets, etc.) at no additional
                            charge.
                        </p>
                    </div>
                </div>

                <div class="card feed">
                    <div class="card-body">
                        <h5 class="card-title">
                            Can I have fewer than 3 users on my account?
                        </h5>
                        <p class="card-text">
                            Yes. The Dropbox Business base package includes 3 users, but you don’t need to use all the licenses right away. Since licenses can be reused, many of our customers reserve extra licenses for contractors or clients.
                        </p>
                    </div>
                </div>

                <div class="card feed">
                    <div class="card-body">
                        <h5 class="card-title">
                            Can I upgrade my existing Dropbox Basic or Plus account? How does migration work?
                        </h5>
                        <p class="card-text">
                            Yes. Moving to a Business account is easy! All your content will stay the same — your files will stay where they are, and all your settings (like shared folder relationships and linked devices) will remain the same. For admins, all your team members who
                            already use Dropbox will have that same experience, and anyone without an existing Dropbox account will be prompted to sign up when you send them an invite.
                        </p>
                    </div>
                </div>

                <div class="card feed">
                    <div class="card-body">
                        <h5 class="card-title">
                            Can I share files or folders with Basic/Plus users if I’m on a Business account?
                        </h5>
                        <p class="card-text">
                            Absolutely! As long as your team admin permits external sharing, you can share with any Dropbox user, even if they’re not a member of your Dropbox Business team. However, shared folder members who are not on your Business team will be limited by their
                            own storage quotas. So while your team members will have more space to add and edit files in a shared folder, Dropbox Basic or Plus users will be restricted by their personal quota.
                        </p>
                    </div>
                </div>

            </div>
            <div class="col faq-right-col">
                <div class="card feed">
                    <div class="card-body">
                        <h5 class="card-title">
                            How much space does my team get?
                        </h5>
                        <p class="card-text">
                            Dropbox Business provides three plans to fit your team’s needs. The Standard plan gives your team 5 TB of shared storage. For teams needing more space, the Advanced and Enterprise plans provide as much space as you need.
                        </p>
                    </div>
                </div>

                <div class="card feed">
                    <div class="card-body">
                        <h5 class="card-title">
                            What is the difference between Dropbox Business Standard and Dropbox Business Advanced?
                        </h5>
                        <p class="card-text">
                            Standard provides teams with 5 TB of storage and simple sharing and collaboration tools. For teams needing more storage and security, Advanced provides as much space as your team needs in addition to sophisticated admin, audit, integration, and security
                            features. Learn more about our plans here.
                        </p>
                    </div>
                </div>

                <div class="card feed">
                    <div class="card-body">
                        <h5 class="card-title">
                            What is Dropbox Enterprise?
                        </h5>
                        <p class="card-text">
                            Dropbox Enterprise is a productivity platform equipped with all the core capabilities of Dropbox Business, plus advanced security and control, enhanced customer support and customization to meet your large organization’s needs.
                        </p>
                    </div>
                </div>

                <div class="card feed">
                    <div class="card-body">
                        <h5 class="card-title">
                            Do you have any discounts for non-profits or educational institutions?
                        </h5>
                        <p class="card-text">
                            Yes! <a href="">Please contact our sales team</a> for more information.
                        </p>
                    </div>
                </div>

                <div class="card feed">
                    <div class="card-body">
                        <h5 class="card-title">
                            Do you have any volume discounts?
                        </h5>
                        <p class="card-text">
                            Yes! <a href="">Please contact our sales team</a> for more information.
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </form>

    <div class="container-fluid bg-ghostblue">
        <div class="container">
            <div class="row banner large-padding">
                <div class="customer-banner d-flex align-items-center">
                    <img src="img/dropbox-MAXARIZE.png" alt="">
                    <blockquote class="blockquote mb-0">
                        <p>
                            “My first reaction when IT implemented Dropbox was relief because I knew that it would revolutionize how we work, make our job easier, and make us all better at what we do”
                        </p>
                        <footer class="blockquote-footer">Christiaan Gunther, Site Editor of BCBG MAX AZRIA GROUP, LLC</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>

    <div class="container end-section">
        <div class="row">
            <div class="col-12 d-flex flex-column align-items-center mt-5 p-5">
                <h3 class="end">The best sharing and storage solution for your business</h1>
                    <button class="btn bg-dodgerblue text-white big-button-style">Try free for 30 days</button>
                    <p class="mt-2">or <a href="#">purchase now</a></p>
            </div>
        </div>
    </div>

    <div class="container end-menu">
        <div class="row">
            <div class="col">
                <h3>Dropbox</h3>
                <ul>
                    <li><a href="">Desktop app</a></li>
                    <li><a href="">Mobile apps</a></li>
                    <li><a href="">Plans</a></li>
                    <li><a href="">Security</a></li>
                    <li><a href="">Features</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>Company</h3>
                <ul>
                    <li><a href="">About us</a></li>
                    <li><a href="">Jobs</a></li>
                    <li><a href="">Press</a></li>
                    <li><a href="">Invenstor relations</a></li>
                    <li><a href="">Blog</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>Support</h3>
                <ul>
                    <li><a href="">Help Center</a></li>
                    <li><a href="">Contact us</a></li>
                    <li><a href="">Cookies</a></li>
                    <li><a href="">Privacy & terms</a></li>
                    <li><a href="">Sitemap</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>Community</h3>
                <ul>
                    <li><a href="">Developers</a></li>
                    <li><a href="">Referrals</a></li>
                    <li><a href="">Forum</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>Connect</h3>
                <ul>
                    <li><a href="">Twitter</a></li>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">YouTube</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>Products</h3>
                <ul>
                    <li><a href="">Plus</a></li>
                    <li><a href="">Professional</a></li>
                    <li><a href="">Business</a></li>
                    <li><a href="">Enterprise</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="container footer border-top">
        <div class="row">
            <div class="col d-flex justify-content-between">
                <div class="socials">
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-twitter-square"></i>
                    <i class="fab fa-linkedin"></i>
                </div>
                <div class="lang-select">
                    <a href="">
                        <i class="fas fa-globe-americas"></i>English (United States)<i class="fas fa-caret-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>