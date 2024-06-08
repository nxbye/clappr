

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>B4X SPORTS</title>
<link rel="stylesheet" type="text/css" href="clap.css">
<script src="https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/clappr/dash-shaka-playback@latest/dist/dash-shaka-playback.js"></script>
<script src="https://cdn.jsdelivr.net/gh/clappr/clappr-level-selector-plugin@latest/dist/level-selector.min.js"></script>
</head>
<script> 
	 
	var chnl = location.search.substring(1);
	 
	 
	function cam() {
		document.location.href="/play.php"+chnl;
	}
</script>
<body>
<div id="player"></div>
<script>
function setUserAgent(window, userAgent) {
    // Works on Firefox, Chrome, Opera and IE9+
    if (navigator.__defineGetter__) {
        navigator.__defineGetter__('userAgent', function () {
            return userAgent;
        });
    } else if (Object.defineProperty) {
        Object.defineProperty(navigator, 'userAgent', {
            get: function () {
                return userAgent;
            }
        });
    }
    // Works on Safari
    if (window.navigator.userAgent !== userAgent) {
        var userAgentProp = {
            get: function () {
                return userAgent;
            }
        };
        try {
            Object.defineProperty(window.navigator, 'userAgent', userAgentProp);
        } catch (e) {
            window.navigator = Object.create(navigator, {
                userAgent: userAgentProp
            });
        }
    }
}
setUserAgent(window, "exoplayer");
          var player = new Clappr.Player(
            {  
    source: chnl,

               mimeType:"application/vnd.apple.mpegurl",
  parentId: "#player",
  poster:"https://i.ibb.co/4dp4K6m/IMG-20230907-185052-441.png",
  autoPlay: true,
  loop: true,
  width: '100%',
  height: '100%',
  hideMediaControl: true,
  watermark: "https://i.ibb.co/4dp4K6m/IMG-20230907-185052-441.png",
  watermarkLink: "",
  position: "top-right",
              plugins:[DashShakaPlayback,LevelSelector],
              parentId: '#player'
            });
        </script>
        
        <script>window.onload = () => {
   let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
   bannerNode.parentNode.removeChild(bannerNode);
}</script>
</body>
</html>