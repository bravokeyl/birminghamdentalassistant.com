(function($){



  var fullScreenVideo = fullScreenVideo || {};



  fullScreenVideo = {

      name: 'fullScreenVideo',

      /**

       * CHANGE THESE VARIABLES TO YOUR VIDEOS

       * overlayVideo: The video in the overlay

       * overlayVideoDiv: The jQuery selector of the div containing the overlay video

       * backgroundvideo: The video in the backgorund

       * backgroundideoDiv: The jQuery selector of the div containing the background video

       */

      overlayVideo: 'a66fiffq3u',

      overlayVideoDiv: '#wistia_a66fiffq3u',

      backgroundvideo: 'acmrg4gc8z',

      backgroundideoDiv: '#wistia_acmrg4gc8z',


      

      /**

       * This will call Wistia and embed the two videos

       * @param None

       */

      embedVideo: function()

      {

        var videoOptions = {};

    

        // Add the crop fill plugin to the videoOptions

        Wistia.obj.merge(videoOptions, {

          plugin: {

            cropFill: {

              src: "//fast.wistia.com/labs/crop-fill/plugin.js"

            }

          }

        });



        // Video in the background

        wistiaEmbed = Wistia.embed(fullScreenVideo.backgroundvideo, videoOptions);

        // Video to be shown in the overlay

        overlayEmbed = Wistia.embed(fullScreenVideo.overlayVideo, videoOptions);



        /**

         * We load the thumbnail in the background while we wait

         * for the video to load and play. Once loaded, we pause, reset to 

         * frame zero, show the video then play it.

         */

        wistiaEmbed.bind("play", function(){

          wistiaEmbed.pause();

          wistiaEmbed.time(0);

          $(fullScreenVideo.backgroundideoDiv).css('visibility', 'visible');

          wistiaEmbed.play();

          return this.unbind;

        });

      },

      /**

       * Plays the video set as overlayEmbed

       * @param None

       */

      playVideo: function()

      {
        var width = $( window ).width();
        var height = $( window ).height();
         $("#video_container").css("width",width).css("height",height).css("position","fixed").css("top",0).css("left",0).css("z-index","999999");         



        $(fullScreenVideo.overlayVideoDiv).css("left", 0).css("visibility", "visible");

        overlayEmbed.plugin.cropFill.resize();

        $("#text").css({ opacity: 0 });

        $("#ex").css("position","fixed").css("right", 24);

        overlayEmbed.play();

      },

      /**

       * Hide the overlay video and pause it. Also reshow 

       * the text on the page.

       * @param None

       */

      exitVideo: function()

      {

        $(fullScreenVideo.overlayVideoDiv).css("left", -3000).css("visibility", "hidden");

        $("#ex").css("right", -3000);

        $("#text").css({ opacity: 1 });

        $("#video_container").css("position","relative").css("z-index","1").css("width","100%").css("height",$("#video_container").width()/2);

        overlayEmbed.pause();

        overlayEmbed._keyBindingsActive = false;

      },

      /**

       * Fix the size of the images and text on page

       * @param None

       */

      fixTextPosition: function()

      {
        console.log('OKOKOK');

        var width = $( window ).width();

        var twidth = '100%';

        var height = $( window ).height();

        textWidth = $("#actions").width();

        textHeight = $("#actions").height();

        var ntwidth = $("#video_container").width();
        var theight = ntwidth/2;
        $("#video_container").css("width", twidth ).css("height", ntwidth/2 );

        $("#main-image").css("width", twidth ).css("height", theight);


        $("#text").css("left", (ntwidth/2) - (textWidth/2)).css("top", (theight/2) - (textHeight/2));

      }

       

  }



  /**

   * When the doc is ready, fix the video and images sizes

   * then display the text on the page.

   */

  $(document).ready(function() {

    fullScreenVideo.fixTextPosition();

    $("#text").delay(200).animate({ opacity: 1 }, 650);

  });



  // If the widow is resized, resize the videos

  $(window).resize(fullScreenVideo.fixTextPosition);



  // When the play button is clicked, call the play function

  $(".rectangle").click(fullScreenVideo.playVideo);



  // When the "X" is clicked, exit the video

  $("#ex").click(fullScreenVideo.exitVideo);



  // Start loading the video

  fullScreenVideo.embedVideo();





})(jQuery);