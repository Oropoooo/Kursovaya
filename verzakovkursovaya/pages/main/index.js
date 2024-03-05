function onEntry(entry) {
    entry.forEach(change => {
        if (change.isIntersecting) {
            change.target.classList.add('element-show');
        } else {
            change.target.classList.remove('element-show');
        }
    });
}

let options = {
    threshold: [0.2]
};

let observers = [];

['.overlap-wrapper', '.rectangle-wrapper', '.star', '.star-2', '.star-3', '.star-4', '.star-5', '.star-6', '.star-7', '.star-8', '.star-9', '.star-10'].forEach(selector => {
    let observer = new IntersectionObserver(onEntry, options);
    let elements = document.querySelectorAll(selector);
    elements.forEach(elm => {
        observer.observe(elm);
    });
    observers.push(observer);
});