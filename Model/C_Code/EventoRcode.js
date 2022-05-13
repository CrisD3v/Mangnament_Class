let btn = document.getElementById('Btn');
let Input = document.getElementById('InputC');
function createInstance()
{
  let req = null;
  if(window.XMLHttpRequest) {
    req = new XMLHttpRequest();
  }
  else if (window.ActiveXObject) {
    try {
      req = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
       try {
        req = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (e) {
            alert("XHR not created");
          }
      }
    }
    return req;
}

btn.onclick = () => 
{ 
   let req = createInstance();
   req.onreadystatechange = function()
   { 
      if(req.readyState == 4)
      {
         if(req.status == 200)
         {
            result = Input.value = req.responseText;
         }	
         else	
         {
            alert("Error: returned status code " + req.status + " " + req.statusText);
         }	
      } 
   }; 
   req.open("GET", "../../Model/C_Code/Rcode.php", true); 
   req.send(null); 
   console.log('FULL REQUEST')
 } 
