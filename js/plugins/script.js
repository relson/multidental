$(function (){
    webcam.set_api_url('upload.php');
    webcam.set_swf_url('js/plugins/webcam/webcam.swf');
    webcam.set_quality(90);
    webcam.set_shutter_sound(true, 'js/plugins/webcam/shutter.mp3');
    
    $('#camera').html(webcam.get_html(220, 220));
});