document.getElementById("survey").addEventListener("submit", function(event) 
{
	const have = document.getElementById("have").value.trim();
	const title = document.getElementById("title").value.trim();
	const description = document.getElementById("description").value.trim();
	const length = document.getElementById("length").value.trim();
	const time = document.getElementById("time").value.trim();
	const difficulty = document.getElementById("difficulty").value.trim();
	const entry = document.getElementById("entry").value.trim();
	const email = document.getElementById("email").value.trim();

	if (!have || !title || !description || !length || !time || !difficulty || !entry || !email)
	{
		alert("Please fill out all required fields.");
		event.preventDefault();
	}
	
});