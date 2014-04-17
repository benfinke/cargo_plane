# Cargo Plane


## Description
A fork of the excellent jQuery-File-Upload project by Sebastian Tschan (blueimp).  Provides a portal for file uploads of testing artifacts used for network discovery, vulnerability management, and other security testing.

## Setup
* [How to setup the plugin on your website](https://github.com/benfinke/cargo_plane/wiki/Setup)

## Support

* Bugs and Feature requests  
**Bugs** and **Feature requests** can be reported using the [issues tracker](https://github.com/benfinke/cargo_plane/issues).  


## Features
* **Multiple file upload:**  
  Allows to select multiple files at once and upload them simultaneously.
* **Drag & Drop support:**  
  Allows to upload files by dragging them from your desktop or filemanager and dropping them on your browser window.
* **Upload progress bar:**  
  Shows a progress bar indicating the upload progress for individual files and for all uploads combined.
* **Cancelable uploads:**  
  Individual file uploads can be canceled to stop the upload progress.
* **Resumable uploads:**  
  Aborted uploads can be resumed with browsers supporting the Blob API.
* **Chunked uploads:**  
  Large files can be uploaded in smaller chunks with browsers supporting the Blob API.
* **No browser plugins (e.g. Adobe Flash) required:**  
  The implementation is based on open standards like HTML5 and JavaScript and requires no additional browser plugins.
* **Graceful fallback for legacy browsers:**  
  Uploads files via XMLHttpRequests if supported and uses iframes as fallback for legacy browsers.
* **HTML file upload form fallback:**  
  Allows progressive enhancement by using a standard HTML file upload form as widget element.
* **Cross-site file uploads:**  
  Supports uploading files to a different domain with cross-site XMLHttpRequests or iframe redirects.
* **Multiple plugin instances:**  
  Allows to use multiple plugin instances on the same webpage.
* **Customizable and extensible:**  
  Provides an API to set individual options and define callBack methods for various upload events.
* **Multipart and file contents stream uploads:**  
  Files can be uploaded as standard "multipart/form-data" or file contents stream (HTTP PUT file upload).
* **Compatible with any server-side application platform:**  
  Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.

## Requirements

### Mandatory requirements
* [jQuery](http://jquery.com/) v. 1.6+
* [jQuery UI widget factory](http://api.jqueryui.com/jQuery.widget/) v. 1.9+ (included)
* [jQuery Iframe Transport plugin](https://github.com/benfinke/cargo_plane/blob/master/js/jquery.iframe-transport.js) (included)

The jQuery UI widget factory is a requirement for the basic File Upload plugin, but very lightweight without any other dependencies from the jQuery UI suite.

The jQuery Iframe Transport is required for [browsers without XHR file upload support](https://github.com/blueimp/jQuery-File-Upload/wiki/Browser-support).

## License
Released under the [MIT license](http://www.opensource.org/licenses/MIT).
