(function() {
  const elements = document.getElementsByClassName("animatable");

  const events = ["load", "scroll", "resize", "popstate", "hashchange"];

  for (let event of events) {
    window.addEventListener(event, () => update(elements), {
      passive: true,
    });
  }
})();

function update(elements) {
  for (const element of elements) {
    var position = element.getBoundingClientRect();

    // checking whether fully visible
    /*if(position.top >= 0 && position.bottom <= window.innerHeight) {
		console.log('Element is fully visible in screen');
	}*/

    // checking for partial visibility
    if (position.top < window.innerHeight && position.bottom >= 0) {
      element.classList.add("animated");
    }
  }
}
