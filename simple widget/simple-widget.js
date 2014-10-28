
var $container = '#NamefoWidget';

var $Css = '<link rel="stylesheet" href="http://matts-web-dev.github.io/simple%20widget/widget.css" type="text/css" />';

var $Html ='<div id="widget_shout"><p>New post at <a target="_blank" href="http://mattswebdev.tk/Forum/index.php">Matts web dev</a> on <a href="#">Html and css</a></p><div>';


$('head').append($Css);
$($container).append($Html);
