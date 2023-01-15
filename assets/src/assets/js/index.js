import windowCenter from './scripts/window-center';
import script from './scripts/script';

window.addEventListener("DOMContentLoaded", () => {
	console.log("Event:DOMContentLoaded");
	windowCenter();
	script();
})