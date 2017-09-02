<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<div data-role="page" id="pageone">
  <div data-role="header">
    <h1>Welcome To My Homepage</h1>
  </div>

  <div data-role="main" class="ui-content">
    <p>Click on the link to see the slideup effect.</p>
    <a href="#pagetwo" data-transition="slideup">Slide up to Dialog Page</a>
  </div>

  <div data-role="footer">
    <h1>Footer Text</h1>
  </div>
</div> 

<div data-role="page" data-dialog="true" id="pagetwo">
  <div data-role="header">
    <h1>I'm A Dialog Box!</h1>
  </div>

  <div data-role="main" class="ui-content">
    <p>Click on the link to go to Page One. <b>Note</b>: fade is default.</p>
    <a href="#pageone">Go to Page One</a>
    <p><b>Tip:</b> You can also close the dialog box by clicking the X button in header. This will automatically transition back to the page you came from, with the same transition effect (reversed slideup = slide down) used to open this dialog.</p>
  </div>

  <div data-role="footer">
    <h1>Footer Text in Dialog</h1>
  </div>
</div> 

</body>
</html>
