const tabs = document.querySelectorAll('.tab-btn');

tabs.forEach(tab => tab.addEventListener('click', () => tabCliked(tab)));

function tabCliked(tab) {
    tabs.forEach(t => t.classList.remove('active'));
    tab.classList.add('active');

    const contents = document.querySelectorAll('.content');
    contents.forEach(content => content.classList.remove('active'));

    const contentId = tab.getAttribute('content-id');
    const content = document.getElementById(contentId);
    content.classList.add('active');

}