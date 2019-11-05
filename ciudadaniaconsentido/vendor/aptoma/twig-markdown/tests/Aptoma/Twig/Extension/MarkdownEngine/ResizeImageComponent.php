<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
/**
 * Component to resize images
 *
 * @author Antonio Marcos Dragone
 */
class ResizeImageComponent extends Component {

	/**
	 * 	Resize a PNG, GIF or JPEG image if bigger than size specified.
	 *  If $maxx or $maxy is 0 (zero) it will be autosized to fit the other value.
	 *  If $maxx and $maxy are set, the image will be resized to fit the larger side; if $useareaonly is
	 *  true, the rest will be filled with white
	 * @author Antonio Dragone
	 * @param string $file file to resize, this file will be replaced with the new one. Should be a "real path".
	 * @param int $maxx value for max width.
	 * @param int $maxy value for max height.
	 * @param bool $useareaonly makes the resize function to resize the source image proportionaly, filling
	 * the destination size. The resulting image will not be bigger in height or width than the values
	 * provided in $maxx and $maxy.
	 * @param bool $center if $useareaonly is set to false, centers the image horizontally.
	 * @return type 
	 */
	function resizeImageFileToJPG($file, $maxx, $maxy, $useareaonly = true, $center = false) {
		$image_details = getimagesize($file);
		$imagesize_x = $image_details[0];
		$imagesize_y = $image_details[1];
		//$forceresize = ($maxy<$imagesize_y || $maxx<$imagesize_x); //work only if image is going to be reduced.
		$forceresize = true; //Will work allways

		if ($forceresize) {
			// the following variables are only used to fill a specific size image
			$newx = 0;
			$newy = 0;
			$offsetx = 0;
			$offsety = 0;

			if ($maxx == 0 && $maxy > 0) { //autoadjust x
				$newsizex = $imagesize_x * $maxy / $imagesize_y;
				$newsizey = $maxy;
			} else if ($maxy == 0 && $maxx > 0) { //autoadjust y
				$newsizex = $maxx;
				$newsizey = $imagesize_y * $maxx / $imagesize_x;
			} else if ($maxx <= 0 && $maxy <= 0) { //invalid data, do nothing
				return false;
			} else if ($useareaonly) {//resize to specific size
				$newsizex = $maxx;
				$newsizey = $maxy;

				if (($imagesize_x / $imagesize_y) > 1) { // x is bigger
					$newx = $newsizex;
					$newy = round($newx * $imagesize_y / $imagesize_x);
					if ($newy > $newsizey) { //if newy is bigger than the given maxy
						$newy = $newsizey;
						$newx = round($newy * $imagesize_x / $imagesize_y);
					}
				} else { //equal or y is bigger
					$newy = $newsizey;
					$newx = round($newy * $imagesize_x / $imagesize_y);
					if ($newx > $newsizex) {
						$newx = $newsizex;
						$newy = round($newx * $imagesize_y / $imagesize_x);
					}
				}

				$offsetx = ($newsizex - $newx) / 2;
				$offsety = ($newsizey - $newy) / 2;
			} else if (!$useareaonly) { // Resize to fit largest side
				if (($imagesize_x / $imagesize_y) > 1) { // x is bigger
					$newx = $maxx;
					$newy = round($newx * $imagesize_y / $imagesize_x);
				} else { //equal or y is bigger
					$newy = $maxy;
					$newx = round($newy * $imagesize_x / $imagesize_y);
				}
				$newsizex = $newx;
				$newsizey = $newy;
				if($center){
					$newsizex = $maxx;
					$offsetx = ($newsizex - $newx) / 2;
				}
			}

			//$src = imagecreatefrompng($file);
			switch ($image_details['mime']) {
				case "image/jpeg":
					$src = imagecreatefromjpeg($file); //jpeg file
					break;
				case "image/gif":
					$src = imagecreatefromgif($file); //gif file
					break;
				case "image/png":
					$src = imagecreatefrompng($file); //png file
					break;
			}
			$dest = imagecreatetruecolor($newsizex, $newsizey);
			
			// fills with white
			// TODO: allow any background color and transparent
			$white = imagecolorallocate($dest, 255, 255, 255);
			imagefilledrectangle($dest, 0, 0, $newsizex, $newsizey, $white);

			imagecopyresampled($dest, $src, $offsetx, $offsety, 0, 0, $newsizex - 2 * $offsetx, $newsizey - 2 * $offsety, $imagesize_x, $imagesize_y);
			imagejpeg($dest, $file);
			imagedestroy($src);
			imagedestroy($dest);
		}
	}

}


