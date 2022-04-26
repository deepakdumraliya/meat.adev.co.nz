/**
 * A possible source for a canvas object
 * @typedef		{(HTMLCanvasElement|HTMLImageElement|File|string)}	CanvasSource
 */

import {findGeneratorLabelForElements} from "../components/elements/core/GroupElement.js";

/**
 * Generates a unique identifier
 * @return	{string}	The unique identifier
 */
export let uniqueId = function()
{
	return '_' + Math.random().toString(36).substr(2, 9);
};

/**
 * Clamps a set of dimensions to maximum dimensions while retaining aspect ratio
 * @param	{number[]}	currentDimensions	The current width and height to clamp
 * @param	{number[]}	maxDimensions		The maximum width and height to clamp to
 * @param	{boolean}	upscale				Whether the dimensions should upscale
 * @return	{number[]}						The clamped width and height
 */
let clampDimensions = function(currentDimensions, maxDimensions, upscale = false)
{
	if((maxDimensions[0] || 0) === 0)
	{
		maxDimensions[0] = Number.MAX_SAFE_INTEGER;
	}
	
	if((maxDimensions[1] || 0) === 0)
	{
		maxDimensions[1] = Number.MAX_SAFE_INTEGER;
	}
	
	if(!upscale && currentDimensions[0] <= maxDimensions[0] && currentDimensions[1] <= maxDimensions[1])
	{
		return currentDimensions;
	}
	
	let xRatio = maxDimensions[0] / currentDimensions[0];
	let yRatio = maxDimensions[1] / currentDimensions[1];
	let ratio = Math.min(xRatio, yRatio);
	
	return [currentDimensions[0] * ratio, currentDimensions[1] *  ratio];
};

/**
 * Retrieves the filename from a specific URL
 * @param	{string}	url		The URL to the file
 * @return	{string}			The filename in that URL
 */
export let getFilenameFromUrl = function(url)
{
	let fullUrl = new URL(url, window.location.href);
	let pathname = fullUrl.pathname;
	let index = pathname.lastIndexOf('/');
	return (index !== -1 ? pathname.substring(index + 1) : pathname);
};

/**
 * Converts a data source into a canvas
 * @param	{CanvasSource}					source	The source to convert
 * @return	{Promise<HTMLCanvasElement>}			The canvas element
 */
export let getCanvasFromDataSource = async function(source)
{
	if(source instanceof HTMLCanvasElement)
	{
		return source;
	}
	else if(source instanceof HTMLImageElement)
	{
		let canvas = document.createElement("canvas");
		canvas.width = source.width;
		canvas.height = source.height;
		
		let context = canvas.getContext("2d");
		context.drawImage(source, 0, 0);

		if(source.filename === undefined)
		{
			canvas.filename = uniqueId();
		}
		else
		{
			canvas.filename = source.filename;
		}
		
		return canvas;
	}
	else if(source instanceof File)
	{
		let image = await new Promise(function(resolve)
		{
			loadImage(source, function(img)
			{
				resolve(img);
			}, {orientation: true});
		});
		
		image.filename = source.name;
		return await getCanvasFromDataSource(image);
	}
	else
	{
		let image = await new Promise(function(resolve)
		{
			let image = document.createElement("img");
			
			image.addEventListener("load", function()
			{
				resolve(image);
			});
			
			image.src = source;
		});

		image.filename = getFilenameFromUrl(source);
		return getCanvasFromDataSource(image);
	}
};

/**
 * Checks if an image contains transparency
 * @param	{HTMLCanvasElement}		canvas	The image to check
 * @return	{boolean}						Whether that image contains transparency
 */
let imageContainsTransparency = function(canvas)
{
	let context = canvas.getContext("2d");
	let data = context.getImageData(0, 0, canvas.width, canvas.height).data;

	for(let i = 3; i < data.length; i += 4)
	{
		if(data[i] < 255)
		{
			return true;
		}
	}

	return false;
};

/**
 * Converts a canvas to a blob
 * @param	{HTMLCanvasElement}		canvas		The canvas to convert
 * @param	{string}				type		The MIME type to convert to
 * @param	{Number|undefined}		[quality]	The image quality to use (jpeg, webp), a number between 0 and 1
 * @return	{Blob}								The converted blob
 */
export let getBlobFromCanvas = async function(canvas, type, quality)
{
	if(canvas.toBlob !== undefined)
	{
		return await new Promise(function(resolve)
		{
			canvas.toBlob(function(blob)
			{
				resolve(blob);
			}, type, quality);
		});
	}
	// Edge does not support canvas.toBlob()
	else
	{
		let data = canvas.toDataURL(type, quality).split(",")[1];
		let binaryString = atob(data);
		let length = binaryString.length;
		let intArray = new Uint8Array(length);

		for(let i = 0; i < length; i += 1)
		{
			intArray[i] = binaryString.charCodeAt(i);
		}

		return new Blob([intArray], {type});
	}
};

/**
 * Converts a canvas into a file
 * @param	{HTMLCanvasElement}		canvas		The canvas to convert
 * @param	{Number|undefined}		[quality]	The quality to save as for jpegs, between 0 and 1
 * @return	{File}								The converted canvas
 */
export let convertCanvasToFile = async function(canvas, quality)
{
	let filename = canvas.filename;
	let baseName;

	if(filename === undefined)
	{
		filename = uniqueId();
	}

	if(filename.indexOf(".") > -1)
	{
		baseName = filename.split('.').slice(0, -1).join('.');
	}
	else
	{
		baseName = filename;
	}

	let blob;
	let newFilename;

	if(imageContainsTransparency(canvas))
	{
		blob = await getBlobFromCanvas(canvas, "image/png");
		newFilename = baseName + ".png";
	}
	else
	{
		let jpg = await getBlobFromCanvas(canvas, "image/jpeg", quality);
		let png = await getBlobFromCanvas(canvas, "image/png");
		blob = jpg.size < png.size ? jpg : png;
		newFilename = baseName + (jpg.size < png.size ? ".jpg" : ".png");
	}

	return new File([blob], newFilename);
};

/**
 * Resizes an image to some specific dimensions
 * @param	{CanvasSource}					source		The source to resize
 * @param	{number[]}						dimensions	The width and height to resize to
 * @return	{Promise<HTMLCanvasElement>}				A resized canvas element
 */
export let resizeImage = async function(source, dimensions)
{
	let original = await getCanvasFromDataSource(source);
	
	let resized = document.createElement("canvas");
	resized.width = dimensions[0];
	resized.height = dimensions[1];
	resized.filename = original.filename;
	
	let pica = new window.pica();
	
	return await pica.resize(original, resized,
	{
		alpha: true
	});
};

/**
 * Scales an image to be no larger than a set of maximum dimensions
 * @param	{CanvasSource}					source			The source to resize
 * @param	{number[]}						maxDimensions	The maximum width and height of the new image
 * @return	{Promise<HTMLCanvasElement>}					The scaled canvas element
 */
export let scaleImage = async function(source, maxDimensions)
{
	let canvas = await getCanvasFromDataSource(source);
	let currentDimensions = [canvas.width, canvas.height];
	let newDimensions = clampDimensions(currentDimensions, maxDimensions);
	
	return await resizeImage(canvas, newDimensions);
};

/**
 * Crops out a section of an image
 * @param	{CanvasSource}					source		The source to crop
 * @param	{number[]}						cropOrigin	X and Y coordinates of the top left of the crop area
 * @param	{number[]}						dimensions	The width and height of the crop area
 * @return	{Promise<HTMLCanvasElement>}				The cropped canvas element
 */
export let cropImage = async function(source, cropOrigin, dimensions)
{
	let original = await getCanvasFromDataSource(source);

	let cropped = document.createElement("canvas");
	cropped.filename = original.filename;
	cropped.width = dimensions[0];
	cropped.height = dimensions[1];

	let context = cropped.getContext("2d");
	context.drawImage(original, cropOrigin[0], cropOrigin[1], dimensions[0], dimensions[1], 0, 0, dimensions[0], dimensions[1]);
	
	return cropped;
};

/**
 * Centre crops an image to a specific size
 * @param	{CanvasSource}					source		The source to crop
 * @param	{number[]}						dimensions	The width and height to crop to
 * @return	{Promise<HTMLCanvasElement>}				A cropped canvas element
 */
export let centreCropImage = async function(source, dimensions)
{
	let original = await getCanvasFromDataSource(source);

	let finalDimensions = clampDimensions(dimensions, [original.width, original.height], true);
	let cropDimensions = clampDimensions(finalDimensions, [original.width, original.height], true);

	let x = Math.floor((original.width - cropDimensions[0]) / 2);
	let y = Math.floor((original.height - cropDimensions[1]) / 2);

	let cropped = await cropImage(original, [x, y], cropDimensions);
	cropped.filename = original.filename;
	return await resizeImage(cropped, dimensions);
};

/**
 * Smart crops an image to a specific size
 * @param	{CanvasSource}					source			The source to crop
 * @param	{number[]}						dimensions		The width and height to crop to
 * @param	{object}						[cropDetails]	An object to write the crop details to
 * @return	{Promise<HTMLCanvasElement>}					A cropped canvas element
 */
export let smartCropImage = async function(source, dimensions, cropDetails = {})
{
	let original = await getCanvasFromDataSource(source);

	let cropGuess = await window.smartcrop.crop(original,
	{
		width: dimensions[0],
		height: dimensions[1]
	});

	Object.assign(cropDetails, cropGuess.topCrop);

	let cropped = await cropImage(original, [cropDetails.x, cropDetails.y], [cropDetails.width, cropDetails.height]);
	cropped.filename = original.filename;
	return await resizeImage(cropped, dimensions);
};

/**
 * Generates a function that can redirect undefined variables to a proxy object
 * @param	{string}	code	The code that needs to be redirected
 * @return	{Function}			The function for redirecting
 */
export let generateRedirectFunction = function(code)
{
	// We'll use the with(){} JS construct and a Proxy object to redirect undefined variables
	// noinspection DynamicallyGeneratedCodeJS
	return new Function("proxy", `with(proxy) { ${code} }`);
}

/**
 * Generates a special proxy object for redirecting variables
 * @param	{function}	callback	A getter callback that is passed the property name that has been accessed on the proxy
 * @return	{Object}				The proxy object
 */
export let generateRedirectProxy = function(callback)
{
	// The proxy get() is masking the property name, so we store the value from the has() instead, since that always runs immediately before
	let checkedProperty = null;
	
	// Here we setup a proxy that will redirect undefined variables to the getter
	return new Proxy({},
	{
		get: () => callback(checkedProperty),
		
		has: (dtarget, property) =>
		{
			// "window", "document" or an uppercase first letter are probably accessing global scope, allow this request to fall through
			if(property === "window" || property === "document" || property[0] === property[0].toUpperCase())
			{
				return false;
			}
			
			checkedProperty = property
			return true;
		}
	});
};