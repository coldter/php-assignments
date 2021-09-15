const maindiv = document.querySelector('wrapper wrapper--w680');
const gist = document.querySelector('.gist');
const gistbn = document.querySelector('.gistbn');

gistbn.addEventListener("click", () => {
	if(gist.style.display === 'block') {
		gist.style.display = 'none';
		maindiv.scrollIntoView();
	}
	else {
		gist.style.display = 'block';
		gist.scrollIntoView();
	}
})