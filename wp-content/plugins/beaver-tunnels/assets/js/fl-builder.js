jQuery(document).ready(function(e){jQuery(".beaver-tunnels-content .bt-template-overlay").click(function(){var e=confirm("Would you like to navigate away from this page and edit this template?\nYou will be prompted to save any changes.");1==e&&(jQuery(jQuery(this).parent().find("> a")).on("click",FLBuilder._headerLinkClicked),jQuery(jQuery(this).parent().find("> a")).trigger("click"))})});