function FeedbackForm(event)       // The error message
{
  var element1 = event.currentTarget;
  var string1 = element1[0].value;

  document.getElementById("textarea_message").innerHTML ="";              
  var text_Validate1 =/^[ -~]{1,1000}$/;
  var result1 = true;
  if (string1==null || string1=="" || string1==" ") 
  {
     document.getElementById("textarea_message").innerHTML="You have to write something.";
     result1 = false;
  }else if(!text_Validate1.test(string1)){
    document.getElementById("textarea_message").innerHTML="You have exceeded your 1000 words limit for your message!!!";
    result1 = false;
  }

  if(result1 == false)
  {
    event.preventDefault();
  }
}
function charcountupdate(event)      // The character counter       
{

  var element2 = event.currentTarget;
  var string2 = element2[0].value;

  var text_Validate2 =/^.{1,1000}$/;

  var length = string2.length;
 document.getElementById("charCount").innerHTML = length + " out of 1000 characters";

  if (string2==null || string2==" " || !text_Validate2.test(string2))
  {
    document.getElementById("charCount").style.color = "red";
  }

  else {
    document.getElementById("charCount").style.color = "black";
  }


}
function ReseTForm(event)         //  Reset the form to have zero characters.
{
  document.getElementById("textarea_message").innerHTML ="";
}
