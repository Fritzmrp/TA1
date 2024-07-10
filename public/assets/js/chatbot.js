var chatbotButton = document.getElementById("chatbot-button");
var chatbotContainer = document.getElementById("chatbot-container");
var closeChatbotButton = document.querySelector(".close-chatbot");
var displayedAnswers = [];

chatbotButton.addEventListener("mouseenter", function () {
    if (
        window
            .getComputedStyle(chatbotContainer)
            .getPropertyValue("display") === "block"
    ) {
        chatbotButton.innerHTML = closeIcon;
    }
});

chatbotButton.addEventListener("mouseleave", function () {
    if (
        window
            .getComputedStyle(chatbotContainer)
            .getPropertyValue("display") === "block"
    ) {
        chatbotButton.innerHTML =
            '<img src="assets/images/icons8-chat-90.png" alt="Chatbot Icon">';
    }
});

closeChatbotButton.addEventListener("click", function () {
    closeChatbot();
});

chatbotButton.onclick = function () {
    if (
        window
            .getComputedStyle(chatbotContainer)
            .getPropertyValue("display") === "block"
    ) {
        chatbotContainer.style.display = "none";
        chatbotButton.innerHTML =
            '<img src="assets/images/icons8-chat-90.png" alt="Chatbot Icon">';
    } else {
        chatbotContainer.style.display = "block";
        chatbotButton.innerHTML = closeIcon;
    }
};

document
    .querySelector(".back-to-categories")
    .addEventListener("click", function () {
        backToCategories();
    });

function closeChatbot() {
    document.getElementById("chatbot-container").style.display = "none";
    document.getElementById("programs").style.display = "none";

    // Clear chat messages
    let chatContent = document.getElementById("chatbot-content");
    let messages = chatContent.querySelectorAll(".chat-message");
    messages.forEach(message => {
        chatContent.removeChild(message);
    });

    // Reset views
    document.getElementById('categories').style.display = 'block';
    document.getElementById('questions').style.display = 'none';
    document.getElementById('answers').style.display = 'none';
    currentView = 'categories';
    previousView = '';
}

function displayMultiPartAnswer(answerParts) {
    var chatContent = document.getElementById("chatbot-content");
    answerParts.forEach(function (part) {
        if (displayedAnswers.includes(part)) {
            console.log("Duplicate part detected: ", part);
            return;
        }
        displayedAnswers.push(part);

        var chatMessage = document.createElement("div");
        chatMessage.className = "chat-message admin-message";

        var profileCircle = document.createElement("div");
        profileCircle.className = "profile-circle";
        profileCircle.textContent = "C";

        var messageText = document.createElement("p");
        messageText.textContent = part;

        chatMessage.appendChild(profileCircle);
        chatMessage.appendChild(messageText);

        chatContent.appendChild(chatMessage);
    });

    chatContent.scrollTop = chatContent.scrollHeight;
}

function sendMessage() {
    var userInput = document.getElementById("user-input").value.trim();
    if (!userInput) {
        displayMessage("Silakan masukkan pertanyaan Anda.", "admin");
        return;
    }
    console.log(userInput);

    displayMessage(userInput, "user");

    fetch("/chatbot/message", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        },
        body: JSON.stringify({ message: userInput }),
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.response) {
                if (Array.isArray(data.response)) {
                    displayQuestionButtonsNew(data.response);
                } else if (typeof data.response === "object") {
                    const questions = Object.keys(data.response).map((key) => ({
                        id: key,
                        pertanyaan: data.response[key],
                    }));
                    displayQuestionButtonsNew(questions);
                } else {
                    displayMessage(data.response, "admin");
                }
            }
        })
        .catch((error) => {
            console.error("Error:", error);
            displayMessage(
                "Terjadi kesalahan. Silakan coba lagi nanti.",
                "admin"
            );
        });

    document.getElementById("user-input").value = "";
}

function displayQuestionButtonsNew(questions) {
    console.log(questions);
    var questionList = document.createElement("ul");
    questionList.classList.add("question-list");

    questions.forEach(function (question) {
        var listItem = document.createElement("li");
        listItem.textContent = question.pertanyaan;

        listItem.classList.add("question-button");
        listItem.setAttribute("data-pertanyaan-id", question.id);

        listItem.onclick = function () {
            fetchAnswer(question.id);
        };
        questionList.appendChild(listItem);
    });

    document.getElementById("chatbot-content").appendChild(questionList);
}

function fetchAnswer(pertanyaanId) {
    fetch("/chatbot/jawaban", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        },
        body: JSON.stringify({ pertanyaan_id: pertanyaanId }),
    })
        .then((response) => response.json())
        .then((data) => {
            if (typeof data.response === "string") {
                displayMessage(data.response, "admin");
            } else {
                displayMessage("Tidak ada jawaban yang tersedia.", "admin");
            }
        })
        .catch((error) => {
            console.error("Error:", error);
            displayMessage(
                "Terjadi kesalahan. Silakan coba lagi nanti.",
                "admin"
            );
        });
}

function displayMessage(message, sender) {
    console.log(message);
    if (displayedAnswers.includes(message)) {
        console.log("Duplicate message detected: ", message);
        return;
    }
    displayedAnswers.push(message);

    var chatContent = document.getElementById("chatbot-content");
    var chatMessage = document.createElement("div");
    chatMessage.className = "chat-message";

    if (sender === "admin") {
        var profileCircle = document.createElement("div");
        profileCircle.className = "profile-circle";
        profileCircle.textContent = "C";

        var messageText = document.createElement("p");
        messageText.textContent = message;

        chatMessage.appendChild(profileCircle);
        chatMessage.appendChild(messageText);
        chatMessage.classList.add("admin-message");
    } else {
        chatMessage.innerHTML = "<p><strong></strong>" + message + "</p>";
        chatMessage.classList.add("user-message");
    }

    chatContent.appendChild(chatMessage);
    chatContent.scrollTop = chatContent.scrollHeight;
}
