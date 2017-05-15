function lengthRange(inputtxt, minlength, maxlength)
{
   var userInput = inputtxt;
   if(userInput.length >= minlength && userInput.length <= maxlength)
      {
        return true;
      }
   else
      {

        return false;
      }
}
