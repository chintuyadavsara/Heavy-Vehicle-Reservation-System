<html>
<title>Heavy Vehicle Reservation System</title>
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<style>
body {
  font-family: 'Lato', georgia;
  font-size: 25px;
  color: rgba(255, 255, 255, 1);
  background-color: #004080;
  text-align: center;
  font-weight: 300;
  -webkit-font-smoothing: antialiased;
}

#contact-form {
  max-width: 90%;
  margin: 0 auto;
}

label {
  font-weight: 400;
  cursor: pointer;
}

textarea,
input {
  border: none;
  outline: none;
  border-radius: 0;
  text-align: center;
  background: none;
  font-weight: 700;
  font-family: 'Lato', georgia;
  font-size: 25px;
  color: rgba(255, 255, 255, 1);
  max-width: 90%;
  padding: 1rem;
  border: 2px dashed rgba(255, 255, 255, 0);
  box-sizing: border-box;
  cursor: text;
}

textarea {
  text-align: left;
  /* overflow:hidden; */
  
  resize: none;
  width: 90%;
  border-color: rgba(255, 255, 255, 0)
}

textarea:focus {
  background-color: rgba(255, 255, 255, 0.2);
  border: 2px dashed rgba(255, 255, 255, 1);
}

textarea:focus:required:valid {
  border: 2px solid rgba(255, 255, 255, 0);
  border-bottom: 2px solid rgba(255, 255, 255, 0.2);
}

textarea:required:valid {
  border-bottom: 2px solid rgba(255, 255, 255, 0.2);
}

input {
  border-bottom: 2px dashed rgba(255, 255, 255, 0.5);
}

input:required,
textarea:required {
  border-bottom: 2px dashed rgba(255, 255, 255, 0.5);
}

input:focus {
  border-bottom: 2px dashed rgba(255, 255, 255, 1);
  background-color: rgba(255, 255, 255, 0.2);
}

input:required:valid {
  border-bottom: 2px solid rgba(255, 255, 255, 0.2);
}

input:required:invalid {
  color: rgba(255, 255, 255, 0.5);
}

::-webkit-input-placeholder {
  text-align: center;
  color: rgba(255, 255, 255, 0.4);
  font-style: italic;
  font-weight: 400;
}

:-moz-placeholder {
  /* Firefox 18- */
  
  text-align: center;
  color: rgba(255, 255, 255, 0.4);
  font-style: italic;
  font-weight: 400;
}

::-moz-placeholder {
  /* Firefox 19+ */
  
  text-align: center;
  color: rgba(255, 255, 255, 0.4);
  font-style: italic;
  font-weight: 400;
}

:-ms-input-placeholder {
  text-align: center;
  color: rgba(255, 255, 255, 0.4);
  font-style: italic;
  font-weight: 400;
}

.expanding {
  vertical-align: top;
}

.send-icn {
  fill: rgba(255, 255, 255, 1)
}

.send-icn:hover {
  fill: rgba(0, 0, 0, 1);
  cursor: pointer;
}

button {
  background: none;
  border: none;
  outline: none;
  margin: 2vmax;
}

button:hover small {
  opacity: 1;
}

small {
  display: block;
  opacity: 0;
}

.website {
  opacity: 1;
  font-size: 16px;
  color: white;
  position: relative;
  text-align: center;
  display: block;
  margin-top: 7%;
  
}

.website a {
  color: white;
}
p1 a:link{
	font-size:4em;
	color:white;
	text-decoration:none;
}
</style>
<script>
// Auto resize input
function resizeInput() {
    $(this).attr('size', $(this).val().length);
}

$('input[type="text"], input[type="email"]')
    // event handler
    .keyup(resizeInput)
    // resize on page load
    .each(resizeInput);


console.clear();
// Adapted from georgepapadakis.me/demo/expanding-textarea.html
(function(){
  
  var textareas = document.querySelectorAll('.expanding'),
      
      resize = function(t) {
        t.style.height = 'auto';
        t.style.overflow = 'hidden'; // Ensure scrollbar doesn't interfere with the true height of the text.
        t.style.height = (t.scrollHeight + t.offset ) + 'px';
        t.style.overflow = '';
      },
      
      attachResize = function(t) {
        if ( t ) {
          console.log('t.className',t.className);
          t.offset = !window.opera ? (t.offsetHeight - t.clientHeight) : (t.offsetHeight + parseInt(window.getComputedStyle(t, null).getPropertyValue('border-top-width')));

          resize(t);

          if ( t.addEventListener ) {
            t.addEventListener('input', function() { resize(t); });
            t.addEventListener('mouseup', function() { resize(t); }); // set height after user resize
          }

          t['attachEvent'] && t.attachEvent('onkeyup', function() { resize(t); });
        }
      };
  
  // IE7 support
  if ( !document.querySelectorAll ) {
  
    function getElementsByClass(searchClass,node,tag) {
      var classElements = new Array();
      node = node || document;
      tag = tag || '*';
      var els = node.getElementsByTagName(tag);
      var elsLen = els.length;
      var pattern = new RegExp("(^|\\s)"+searchClass+"(\\s|$)");
      for (i = 0, j = 0; i < elsLen; i++) {
        if ( pattern.test(els[i].className) ) {
          classElements[j] = els[i];
          j++;
        }
      }
      return classElements;
    }
    
    textareas = getElementsByClass('expanding');
  }
  
  for (var i = 0; i < textareas.length; i++ ) {
    attachResize(textareas[i]);
  }
  
})();

</script>
<p1><a href="index.php">&#8592;</a></p1>
<form id="contact-form" method="post" name="myemailform" action="form-to-email.php">
  <p>Dear Team,</p>
  <p>My
    <label for="your-name">name</label> is
    <input type="text" name="name" id="your-name" minlength="3" placeholder="(your name here)" required> and</p>

  <p>my
    <label for="email">email address</label> is
    <input type="email" name="email" id="email" placeholder="(your email address)" required>
  </p>

  <p> I have a
    <label for="your-message">message</label> for you,</p>

  <p>
    <textarea name="message" id="your-message" placeholder="(your msg here)" class="expanding" required></textarea>
  </p>
  <p>
    <button type="submit">
      <svg version="1.1" class="send-icn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="36px" viewBox="0 0 100 36" enable-background="new 0 0 100 36" xml:space="preserve">
        <path d="M100,0L100,0 M23.8,7.1L100,0L40.9,36l-4.7-7.5L22,34.8l-4-11L0,30.5L16.4,8.7l5.4,15L23,7L23.8,7.1z M16.8,20.4l-1.5-4.3
	l-5.1,6.7L16.8,20.4z M34.4,25.4l-8.1-13.1L25,29.6L34.4,25.4z M35.2,13.2l8.1,13.1L70,9.9L35.2,13.2z" />
      </svg>
      <small>send</small>
    </button>
  </p>
</form>
</html>
