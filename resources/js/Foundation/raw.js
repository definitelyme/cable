/////////// Script to adjust size of Avatar to that of "Get Started" button ////////////
// Get both elements
var getStarted = document.getElementById("get--started");
var avatar = document.getElementById("my--avatar");
// Set the height
if (avatar) avatar.style.height = `${getStarted.clientHeight}px`;