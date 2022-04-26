<?php
	$data_dir = $_SERVER['DOCUMENT_ROOT'].'/admin/scripts-includes/';
	require_once $data_dir.'universal.php';
	putenv('GDFONTPATH=' . realpath('.'));

	/*
	* File: CaptchaSecurityImages.php
	* Author: Simon Jarvis
	* Copyright: 2006 Simon Jarvis
	* Date: 03/08/06
	* Updated: 07/02/07
	* Requirements: PHP 4/5 with GD and FreeType libraries
	* Link: http://www.white-hat-web-design.co.uk/articles/php-captcha.php
	*
	* This program is free software; you can redistribute it and/or
	* modify it under the terms of the GNU General Public License
	* as published by the Free Software Foundation; either version 2
	* of the License, or (at your option) any later version.
	*
	* This program is distributed in the hope that it will be useful,
	* but WITHOUT ANY WARRANTY; without even the implied warranty of
	* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	* GNU General Public License for more details:
	* http://www.gnu.org/licenses/gpl.html
	*
	*/

	/**
	 * Creates CAPTCHA security images
	 * @author	Simon Jarvis
	 */
	class CaptchaSecurityImages
	{
		var $font = 'monofont.ttf';

		/**
		 * Generates the code for the CAPTCHA
		 * @param	int		$characters		The number of characters desired
		 * @return	string	The code for the CAPTCHA
		 */
		function generateCode($characters)
		{
			/*
			 * list all possible characters, similar looking characters and vowels have been removed
			 */
			$possible = '23456789bcdfghjkmnpqrstvwxyz';
			$code = '';
			$i = 0;

			while($i < $characters)
			{
				$code .= substr($possible, mt_rand(0, strlen($possible) - 1), 1);
				$i += 1;
			}

			return $code;
		}
		
		/** @noinspection PhpDocMissingReturnTagInspection */
		/**
		 * Outputs a security image and stores the code in the session
		 * @param    int $width      The width of the image
		 * @param    int $height     The height of the images
		 * @param    int $characters The number of characters in the image
		 */
		function __construct($width = 120, $height = 40, $characters = 6)
		{
			if(!isset($_SESSION["security_code"]))
			{
				$_SESSION["security_code"] = [];
			}

			$code = $this->generateCode($characters);
			$_SESSION['security_code'][] = $code;

			if($this->is_ajax_request())
			{
				echo $code;

				return;
			}

			/*font size will be 75% of the image height*/
			$font_size = $height * 0.75;
			$image = imagecreate($width, $height) or die('Cannot initialize new GD image stream');

			/* set the colours */
			$text_color = imagecolorallocate($image, 20, 40, 100);
			$noise_color = imagecolorallocate($image, 100, 120, 180);

			/* generate random dots in background */
			for($i = 0; $i < ($width * $height) / 3; $i += 1)
			{
				imagefilledellipse($image, mt_rand(0, $width), mt_rand(0, $height), 1, 1, $noise_color);
			}

			/* generate random lines in background */
			for($i = 0; $i < ($width * $height) / 150; $i += 1)
			{
				imageline($image, mt_rand(0, $width), mt_rand(0, $height), mt_rand(0, $width), mt_rand(0, $height), $noise_color);
			}

			/* create textbox and add text */
			$textbox = imagettfbbox($font_size, 0, $this->font, $code) or die('Error in imagettfbbox function');
			$x = ($width - $textbox[4]) / 2;
			$y = ($height - $textbox[5]) / 2;
			imagettftext($image, $font_size, 0, $x, $y, $text_color, $this->font, $code) or die('Error in imagettftext function');

			/* output captcha image to browser */
			header('Content-Type: image/jpeg');
			imagejpeg($image);
			imagedestroy($image);
		}

		/**
		 * detect an ajax request
		 * @return	bool	Whether it's an AJAX request
		 */
		function is_ajax_request()
		{
			return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
		}
	}

	$width = isset($_GET['width']) && $_GET['height'] < 600 ? $_GET['width'] : '120';
	$height = isset($_GET['height']) && $_GET['height'] < 200 ? $_GET['height'] : '40';
	$characters = isset($_GET['characters']) && $_GET['characters'] > 2 ? $_GET['characters'] : '6';

	$captcha = new CaptchaSecurityImages($width, $height, $characters);
	session_write_close();
	exit;