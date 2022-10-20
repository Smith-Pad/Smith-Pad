<?php
function content() {
        print('<div class="FOIL-layout-regular-no-shadow">');
        print('<div class="FOIL-layout-regular-no-shadow">');
        print('<div class="FOIL-layout-regular-no-shadow">');
        print('<div class="FOIL-layout-regular-no-shadow">');
        print('<div class="FOIL-layout-regular-no-shadow">');
        print('<center> <FOIL-font-size-60> <div id="time_service"></div> </FOIL-font-size-60> </center>');
        print('<script src="src/FOIL-time.js"></script>');
        print('<center><FOIL-font-size-40> About </FOIL-font-size-40></center>');
        include('Content/story.content/story.content');
        print('</div>');
        print('</div>');
        print('</div>');
        print('</div>');
        print('</div>');
}
content();
?>
