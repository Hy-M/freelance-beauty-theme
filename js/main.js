const menuIcon = document.getElementById("menu--icon");
const slideoutMenu = document.getElementById("slideout--menu");

menuIcon.addEventListener("click", () => {
	if (slideoutMenu.style.opacity === "1") {
		slideoutMenu.style.opacity = "0";
		slideoutMenu.style.pointerEvents = "none";
		slideoutMenu.style.display = "none";
	} else {
		slideoutMenu.style.display = "block";
		slideoutMenu.style.opacity = "1";
		slideoutMenu.style.pointerEvents = "auto";
	}
});
