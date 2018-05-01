<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>TestBeKey</title>
</head>
<body>
    <div class="video">
        <video class="video_content" id="video_content" src="http://crazysob.bekey.io/osemrecipe/videodemo/video/onion.mp4" controls="controls" autoplay="autoplay" loop></video>
        <img class="img_arrow" id="img_arrow" src="images/left_arrow.png" alt="present">
        <img class="img_present" id="img_present" src="images/present.png" alt="present">
    </div>
    <div class="popup" id="popup">
        <div class="popup_content">
            <span class="cross" id="cross">&times;</span>
            <img class="popup_img"  src="images/present.png" alt="present">
            <div class="content"></div>
        </div>
    </div>

    <script type="text/javascript">
        window.onload = function () {
            var img_present = document.getElementById('img_present'),
                img_arrow = document.getElementById('img_arrow'), // Present icon
                video_content = document.getElementById('video_content'), // Video
                popup = document.getElementById('popup'), // Pop up window
                cross = document.getElementById('cross'); // Cross

            video_content.ontimeupdate = function() {updateTime()}; // Update time of video
            var currentTimeVideo = 0;
            function updateTime() {
                currentTimeVideo = video_content.currentTime;
                if (currentTimeVideo > 24 & currentTimeVideo < 38)
                {
                    img_present.style.display = 'block';
                    img_arrow.style.display = 'block'; // Show of icon
                }
                else {
                    img_present.style.display = 'none';
                    img_arrow.style.display = 'none'; // Fade out of icon
                }
            }

            img_present.onclick = function () {
                video_content.pause(); // Pause of video
                popup.style.display = 'block'; // Show pop up window
            }

            cross.onclick = function () {
                popup.style.display = 'none'; // Fade out pop up window
            }
        };
    </script>
</body>
</html>