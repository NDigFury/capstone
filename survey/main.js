document.getElementById("survey").addEventListener("submit", function(event) 
{
	const have = document.getElementById("have").value.trim();
	const title = document.getElementById("title").value.trim();
	const type = document.getElementById("type").value.trim();
	const description = document.getElementById("description").value.trim();
	const why = document.getElementById("why").value.trim();
	const milestone = document.getElementById("milestone").value.trim();
	const length = document.getElementById("length").value.trim();
	const resources = document.getElementById("resources").value.trim();
	const achieve = document.getElementById("achieve").value.trim();
	const obstacles = document.getElementById("obstacles").value.trim();
	const help = document.getElementById("help").value.trim();
	const difficulty = document.getElementById("difficulty").value.trim();
	const knowledge = document.getElementById("knowledge").value.trim();
	const email = document.getElementById("email").value.trim();

	if (!have || !title || !type || !description || !why || !milestone || !length || !resources || !achieve || !obstacles || !help || !difficulty || !knowledge || !email)
	{
		alert("Please fill out all required fields.");
		event.preventDefault();
	}

	
});