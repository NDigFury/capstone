// Measures put in place for proper submission from the user in 'create submission'
document.getElementById("survey").addEventListener("submit", function(event) 
{
	const names = document.getElementById("names").value.trim();
	const title = document.getElementById("title").value.trim();
	const description = document.getElementById("description").value.trim();
	const length = document.getElementById("length").value.trim();
	const difficulty = document.getElementById("difficulty").value.trim();
	const studentID = document.getElementById("studentID").value.trim();
	const check = document.getElementById("check").value.trim();

	if (!names || !title || !description || !length || !difficulty || !studentID || !check)
	{
		alert("Please fill out all required fields.");
		event.preventDefault();
	}
});