function Validate_data()
{
	var username = document.getElementById ("username");
	var work_experience = document.getElementById ("work_experience");

	if(username.value == '')
	{
      alert('Please Enter Your username');
      username.focus();
      return false;
	}

	if(work_experience.value == '')
	{
      alert('Please Enter Years of experience');
      work_experience.focus();
      return false;
	}

}
