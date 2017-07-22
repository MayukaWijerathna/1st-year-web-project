function validateForm()
{
var a=document.forms["reg"]["username"].value;
var b=document.forms["reg"]["id"].value;
var c=document.forms["reg"]["password"].value;
var d=document.forms["reg"]["faculty"].value;
var e=document.forms["reg"]["email"].value;
var f=document.forms["reg"]["phone"].value;
if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f==""))
  {
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("Username must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("Student ID must be filled out");
  return false;
  }
if (c==null || c=="")
  {
  alert("Password must be filled out");
  return false;
  }
if (d==null || d=="")
  {
  alert("Faculty must be filled out");
  return false;
  }
if (e==null || e=="")
  {
  alert("Email must be filled out");
  return false;
  }
if (f==null || f=="")
  {
  alert("Phone Number must be filled out");
  return false;
  }
}
