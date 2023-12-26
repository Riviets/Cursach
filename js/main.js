class Discussion {
    constructor(title, topic, text) {
        this.title = title;
        this.topic = topic;
        this.text = text;
    }
}

const createDiscussionForm = document.querySelector(".create__form");

createDiscussionForm.addEventListener('submit', function (e) {
    e.preventDefault();
    const title = document.getElementById("discussionTitle").value;
    const topic = document.getElementById("discussionTopic").value;
    const text = document.getElementById("discussionText").value;

    let discussion = new Discussion(title, topic, text);
    saveToDatabase(discussion);
    createDiscussionForm.reset();
});

function saveToDatabase(discussion) {
    // Ваш URL серверу (вам потрібно замінити це на власний URL)
    const serverUrl = "http://your-server-url/saveToDatabase";

    // Викликати сервер для збереження даних
    fetch(serverUrl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(discussion),
    })
        .then(response => response.json())
        .then(data => {
            console.log('Success:', data);
        })
        .catch((error) => {
            console.error('Error:', error);
        });
}


const backBtns = document.querySelectorAll('.back-btn');

backBtns.forEach((el) => {
    el.addEventListener('click', () => {
        window.history.back();
    });
});