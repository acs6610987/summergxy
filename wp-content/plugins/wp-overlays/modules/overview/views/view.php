<?php
/**
 * Posts Pro Overviews.
 * @package Posts
 * @author Flipper Code <flippercode>
 **/

?>
<div class="container">
<div class="row">
<div class="col-md-11">
<h4 class="alert alert-info"> <?php _e( 'Shortcode Documentation',WOP_TEXT_DOMAIN ); ?> </h4>
<div class="wpgmp-overview">

<?php _e( '<pre>[overlays src = "http://www.flippercode.com/wp-content/themes/flippercode/images/responsive.png" in="flipInX" out="flipOutX" width="50" height="100" color="#018EB7" opacity="0.8" text_position="overlay_center" ]FlipperCode<br>We Are Rockstar Wordpress Programmers[/overlays]</pre><br>Put the above shortcode in your post/page editor and update the image path and color for overlay accordingly. It will show overlay on the Image. You can also wrap the above shortcode in an anchor tag if you want to make it a link. All the parameters passed can be changed according to requirements. Parameters and their possible values are listed below. <br><br>' )?>
<table class="table table-striped">
<thead>
<tr>
<th><?php _e( 'Shortcode Key' ); ?></th><th><?php _e( 'Description' ); ?></th><th><?php _e( 'Possible Values' ); ?></th>
</tr>
</thead>
<tbody>
<tr>
<td width="15%">src</td><td width="30%"><?php _e( 'Url of source image we want to see as overlay background image' ); ?></td>
<td><?php _e( 'Eg. A valid image path.' ); ?></td>
</tr>
<tr>
<td><?php _e( 'in' ); ?></td><td><?php _e( 'Animation class name which must be applied as Starting / In effect' ); ?></td>
<td><p><?php _e('bounce,flash,pulse,rubberBand,shake,swing,tada,wobble,
bounceIn,bounceInDown,bounceInLeft,bounceInRight,bounceInUp,
fadeIn,fadeInDown,fadeInDownBig,fadeInLeft,fadeInLeftBig,fadeInRight,fadeInRightBig,fadeInUp,fadeInUpBig,
flip,flipInX,flipInY,
lightSpeedIn,
rotateIn,rotateInDownLeft,rotateInDownRight,rotateInUpLeft,rotateInUpRight,
rollIn,
zoomIn,zoomInDown,zoomInLeft,zoomInRight,zoomInUp'); ?></p>
</td>
</tr>
<tr>
<td><?php _e( 'out' ); ?></td><td><?php _e( 'Animation class name which must be applied as Finishing / Out effect' ); ?></td>
<td><p><?php _e('bounceout,bounceOutDown,bounceOutLeft,bounceOutRight,bounceOutUp,
fadeOut,fadeOutDown,fadeOutDownBig,fadeOutLeft,fadeOutLeftBig,fadeOutRight,fadeOutRightBig,fadeOutUp,fadeOutUpBig,
flipOutX,flipOutY,
lightSpeedOut,
rotateOut,rotateOutDownLeft,rotateOutDownRight,rotateOutUpLeft,rotateOutUpRight,
rollOut,
zoomOut,zoomOutDown,zoomOutLeft,zoomOutRight,zoomOutUp'); ?></p>    
</td>
</tr>
<tr>
<td><?php _e( 'text_position' ); ?></td><td><?php _e( 'Class name for position of content in overlay' ); ?></td>
<td><?php _e( 'overlay_center , overlay_top_left , overlay_top_right , overlay_bottom_left , overlay_bottom_right' ); ?></td>
</tr>
<tr>
<td><?php _e( 'color' ); ?></td><td><?php _e( 'Color for Overlay in Hexformat' ); ?></td>
<td><?php _e( 'Any Hexaformat Color value Eg. #ffffff' ); ?></td>
</tr>
<tr>
<td><?php _e( 'width' ); ?></td><td><?php _e( 'Width of overlay' ); ?></td>
<td><?php _e( 'For Width in percentage - 1 to 100 (Without unit) <br> For Width in px - Eg. 250px ( With px unit )' ); ?></td>
</tr>
<tr>
<td><?php _e( 'height' ); ?></td><td><?php _e( 'Height of overlay' ); ?></td>
<td><?php _e( 'For Height in percentage - 1 to 100 (Without unit) ' ); ?><br> <?php _e( 'For Height in px - Eg. 250px ( With px unit )' ); ?></td>
</tr>
<tr>
<td><?php _e( 'speed' ); ?></td><td><?php _e( 'Animation Speed' ); ?></td>
<td><?php _e( 'Speed in seconds from .10 to 5.0' ); ?></td>
</tr>
<tr>
<td><?php _e( 'opacity' ); ?></td><td><?php _e( 'Opacity value for Overlay' ); ?></td>
<td><?php _e( 'Opacity value in decimal value from .1 (minimum) to 1 (maximum)' );?></td>
</tr>
<tr>
<td><?php _e( 'class_on_image' ); ?></td><td><?php _e( 'Extra css class on image' ); ?></td>
<td><?php _e( 'Any class name we want to apply on image tag' ); ?></td>
</tr>
<tr>
<td><?php _e( 'post_id' ); ?></td><td><?php _e( 'It will show the featured image for particular post' ); ?></td>
<td><?php _e( 'Any post id value' ); ?></td>
</tr>
<tr>
<td><?php _e( 'attachment_id' ); ?></td><td><?php _e( 'It will show the image for attachment' ); ?></td>
<td><?php _e( 'Any Attachment id value' ); ?></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
