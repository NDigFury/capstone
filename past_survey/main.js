document.getElementById("survey").addEventListener("submit", function(event) 
{
	const names = document.getElementById("names").value.trim();
	const title = document.getElementById("title").value.trim();
	const description = document.getElementById("description").value.trim();
	const url = document.getElementById("url").value.trim();
	const netID = document.getElementById("netID").value.trim();

	if (!names || !title || !description || !url || !netID)
	{
		alert("Please fill out all required fields.");
		event.preventDefault();
	}
});