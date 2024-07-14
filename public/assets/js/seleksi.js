var styleElement = document.createElement("style");
var cssStyles = `
.chat-message {
    clear: both;
    overflow: auto;
}

.user-message p {
    background-color: #8e24aa;
    color: white;
    float: right;
    border-top-right-radius: 0;
}

.admin-message p {
    background-color: #f3f3f3;
    color: #333;
    float: left;
    border-top-left-radius: 0;
}

.user-message p,
.admin-message p {
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 10px 15px;
    max-width: 70%;
}

.profile-circle {
    width: 24px; /* Adjust size as needed */
    height: 24px; /* Adjust size as needed */
    border-radius: 50%;
    background-color: purple;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    margin-right: 8px; /* Space between profile and text */
}
`;
styleElement.appendChild(document.createTextNode(cssStyles));
document.head.appendChild(styleElement);

function displayMessage(message, sender) {
    var chatContent = document.getElementById("chatbot-content");
    var chatMessage = document.createElement("div");
    chatMessage.className = "chat-message";

    var messageClass = sender === "user" ? "user-message" : "admin-message";
    chatMessage.classList.add(messageClass);

    if (sender === "admin") {
        chatMessage.style.display = "flex";
        chatMessage.style.alignItems = "center";

        var profileCircle = document.createElement("div");
        profileCircle.classList.add("profile-circle");
        profileCircle.textContent = "C";

        var messageText = document.createElement("div");
        messageText.innerHTML = sanitizeHTML(message);

        chatMessage.appendChild(profileCircle);
        chatMessage.appendChild(messageText);
    } else {
        chatMessage.innerHTML = "<p><strong></strong>" + sanitizeHTML(message) + "</p>";
    }

    chatContent.appendChild(chatMessage);
    chatContent.scrollTop = chatContent.scrollHeight;
}

function sanitizeHTML(html) {
    var doc = new DOMParser().parseFromString(html, 'text/html');
    return doc.body.innerHTML;
}


let currentView = "categories";
let previousView = "";

document.addEventListener("DOMContentLoaded", function () {
    fetch("/categories")
        .then((response) => response.json())
        .then((data) => {
            let categoriesList = document.getElementById("categories-list");
            data.forEach((category) => {
                let listItem = document.createElement("li");
                listItem.setAttribute("data-kategori-id", category.id);
                listItem.innerText = category.nama_kategori;
                listItem.addEventListener("click", function () {
                    if (
                        category.nama_kategori.toLowerCase() === "program studi"
                    ) {
                        loadProgramStudi();
                    } else {
                        loadQuestions(category.id);
                    }
                });
                categoriesList.appendChild(listItem);
            });
        });

    fetch("/program-studi")
        .then((response) => response.json())
        .then((data) => {
            let programsList = document.getElementById("programs-list");
            data.forEach((program) => {
                let listItem = document.createElement("li");
                listItem.setAttribute("data-program-id", program.id);
                listItem.innerText = program.nama_programstudi;
                listItem.addEventListener("click", function () {
                    loadProgramQuestions(program.id);
                });
                programsList.appendChild(listItem);
            });
        });
});

function loadProgramStudi() {
    document.getElementById("categories").style.display = "none";
    document.getElementById("programs").style.display = "block";
    previousView = currentView;
    currentView = "programs";
}

function loadQuestions(categoryId) {
    fetch(`/categories/${categoryId}/questions`)
        .then((response) => response.json())
        .then((data) => {
            let questionsList = document.getElementById("questions-list");
            questionsList.innerHTML = "";
            data.forEach((question) => {
                let questionItem = document.createElement("li");
                questionItem.setAttribute("data-pertanyaan-id", question.id);
                questionItem.setAttribute("data-context", "categories");
                questionItem.innerText = question.pertanyaan;
                questionItem.addEventListener("click", function () {
                    loadAnswer(question.id, "categories", question.pertanyaan);
                });
                questionsList.appendChild(questionItem);
            });

            document.getElementById("categories").style.display = "none";
            document.getElementById("questions").style.display = "block";
            previousView = currentView;
            currentView = "questionsFromCategories";
        });
}

function loadProgramQuestions(programId) {
    fetch(`/program-studi/${programId}/questions`)
        .then((response) => response.json())
        .then((data) => {
            let questionsList = document.getElementById("questions-list");
            questionsList.innerHTML = "";
            data.forEach((question) => {
                let questionItem = document.createElement("li");
                questionItem.setAttribute("data-pertanyaan-id", question.id);
                questionItem.setAttribute("data-context", "program-studi");
                questionItem.innerText = question.pertanyaan;
                questionItem.addEventListener("click", function () {
                    loadAnswer(
                        question.id,
                        "program-studi",
                        question.pertanyaan
                    );
                });
                questionsList.appendChild(questionItem);
            });

            document.getElementById("programs").style.display = "none";
            document.getElementById("questions").style.display = "block";
            previousView = currentView;
            currentView = "questionsFromPrograms";
        });
}

function loadAnswer(questionId, context, questionText) {
    let endpoint =
        context === "categories"
            ? `/questions/${questionId}/answer`
            : `/program-studi-questions/${questionId}/answer`;
    fetch(endpoint)
        .then((response) => response.json())
        .then((data) => {
            let answerContent = document.getElementById("answer-content");
            answerContent.innerHTML = "";

            let answerContainer = document.createElement("div");
            answerContainer.className = "answer-container";

            let profileCircle = document.createElement("div");
            profileCircle.className = "profile-circle";
            profileCircle.textContent = "C";

            let answerText = document.createElement("div");
            answerText.className = "answer-text";

            let questionParagraph = document.createElement("p");
            questionParagraph.style.backgroundColor = "purple";
            questionParagraph.style.color = "white";
            questionParagraph.style.padding = "10px";
            questionParagraph.style.borderRadius = "5px";
            questionParagraph.style.marginBottom = "20px";
            questionParagraph.innerHTML = `<strong></strong> ${questionText}`;

            let strongTag = document.createElement("strong");
            strongTag.textContent = "";

            let answerParagraph = document.createElement("p");
            answerParagraph.textContent = data.jawaban;

            answerText.appendChild(questionParagraph);
            answerText.appendChild(strongTag);
            answerText.appendChild(answerParagraph);

            answerContainer.appendChild(profileCircle);
            answerContainer.appendChild(answerText);

            answerContent.appendChild(answerContainer);

            document.getElementById("questions").style.display = "none";
            document.getElementById("answers").style.display = "block";
            previousView = currentView;
            currentView = "answers";
        });
}

function backToCategories() {
    let answers = document.getElementById("answers");
    let questions = document.getElementById("questions");
    let programs = document.getElementById("programs");
    let categories = document.getElementById("categories");

    if (currentView === "answers") {
        answers.style.display = "none";
        questions.style.display = "block";
        currentView = previousView;
    } else if (currentView === "questionsFromPrograms") {
        questions.style.display = "none";
        programs.style.display = "block";
        currentView = "programs";
    } else if (currentView === "questionsFromCategories") {
        questions.style.display = "none";
        categories.style.display = "block";
        currentView = "categories";
    } else if (currentView === "programs") {
        programs.style.display = "none";
        categories.style.display = "block";
        currentView = "categories";
    }
}

// function selectCategory(category) {
//     document.getElementById("categories").style.display = "none";
//     document.getElementById("chat-input").style.display = "block";
//     var message;
//     switch (category) {
//         case "Seleksi":
//             message = "Anda memilih 'Seleksi'. Pilih pertanyaan di bawah ini:";
//             displayMessage(message, "admin");

//             fetch("/get-seleksi-questions")
//                 .then((response) => response.json())
//                 .then((data) => {
//                     displayQuestionButtons(data);
//                 })
//                 .catch((error) => {
//                     console.error("Error fetching questions:", error);
//                     displayMessage(
//                         "Gagal mengambil pertanyaan. Silakan coba lagi nanti.",
//                         "admin"
//                     );
//                 });
//             break;
//         default:
//             message = "Bagaimana saya bisa membantu Anda?";
//             displayMessage(message, "admin");
//             break;
//     }
//     document.getElementById("chatbot-container").classList.add("open");
// }

// function displayQuestionButtons(questions) {
//     var questionList = document.createElement("ul");
//     questionList.classList.add("question-list");

//     Object.keys(questions).forEach(function (id) {
//         var listItem = document.createElement("li");
//         listItem.textContent = questions[id];
//         listItem.classList.add("question-button");
//         listItem.onclick = function () {
//             fetchAnswer(id);
//         };
//         questionList.appendChild(listItem);
//     });

//     document.getElementById("chatbot-content").appendChild(questionList);
// }

// function displayQuestionAndAnswer(questionId, questionText) {
//     var chatContent = document.getElementById("chatbot-content");

//     var chatMessageQuestion = document.createElement("div");
//     chatMessageQuestion.className = "chat-message user-message";
//     chatMessageQuestion.innerHTML =
//         "<p><strong>You:</strong> " + questionText + "</p>";
//     chatContent.appendChild(chatMessageQuestion);

//     fetch(`/questions/${questionId}/answer`)
//         .then((response) => response.json())
//         .then((data) => {
//             var chatMessageAnswer = document.createElement("div");
//             chatMessageAnswer.className = "chat-message admin-message";
//             chatMessageAnswer.innerHTML =
//                 "<p><strong>Admin:</strong> " + data.jawaban + "</p>";
//             chatContent.appendChild(chatMessageAnswer);
//             chatContent.scrollTop = chatContent.scrollHeight;
//         });
// }

// function clearPreviousAnswers() {
//     var previousAnswers = document.querySelectorAll(".admin-message");
//     previousAnswers.forEach(function (answer) {
//         answer.remove();
//     });
// }
