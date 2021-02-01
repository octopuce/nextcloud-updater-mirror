<html>
<head><title>Mirror of Nextcloud Server Download</title>
<style type="text/css">
     body {
         font-family: Arial, helvetica, sans-serif;
       margin: 20px;
     }
     div {
         max-width: 850px;
             margin: auto;
     }
     </style>
</head>
<body>
<div>
<h1>Mirror of Nextcloud Server Download</h1>
<p>
This website is a <b>non official and not affiliated to NextCloud</b> mirror of the <code>updates.nextcloud.com</code> service. It serves update files telling that the releases are not on <code>download.nextcloud.com</code> (the usual server), but on <code><a href="https://ncdownload.octopuce.fr">ncdownload.octopuce.fr</a></code>, therefore providing a faster and stable mirror of NextCloud releases. It is updated automatically hourly and provides files with the same signature as the official NextCloud ones.
</p>
     <p>
     To use this mirror in place of the official one, add the following line in your <code>config/config.php</code> file :
     </p>
     <pre>
     'updater.server.url' => 'https://ncupdate.octopuce.fr/updater_server/',    
     </pre>
     <p>
     Now you can launch <code>cd updater;php updater.phar </code>, this will use the new mirror.
                                             </p>
                                             <p>
                                             This is based on the code of <a href="https://github.com/nextcloud/updater_server" target="_blank">https://github.com/nextcloud/updater_server</a> which is the official update system of NextCloud. thanks to them for providing us with every free code they build as a free software anyone can use and hack on &lt;3
                                             </p>
                                             <p>This mirror is provided free of charge by Octopuce, a french free-software managed hosting provider based in Paris. <p>
                                             <p><img src="nextcloud.png" alt="Nextcloud"> <img src="octopuce.png" alt="Octopuce"></p>
                                             
                                             </div>
</body>
</html>