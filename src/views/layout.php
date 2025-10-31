<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macguyver Enterprise</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .carousel-item {
            display: none;
        }
        .carousel-item.active {
            display: block;
        }
        .section-padding {
            scroll-margin-top: 80px;
        }
        .chat-widget {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }
        .chat-window {
            width: 350px;
            height: 500px;
            display: none;
        }
        .chat-window.active {
            display: flex;
        }
        @media (max-width: 640px) {
            .chat-window {
                width: 90vw;
                height: 70vh;
            }
        }
    </style>
</head>
<body class="bg-gray-50">

    <?php include 'components/header.php'; ?>

    <main>
        <?php include 'pages/' . $page . '.php'; ?>
    </main>

    <?php include 'components/chat.php'; ?>
    <?php include 'components/footer.php'; ?>

    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const mobileNav = document.getElementById('mobile-nav');
            mobileNav.classList.toggle('hidden');
        });

        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function() {
                document.getElementById('mobile-nav').classList.add('hidden');
            });
        });

        function toggleChat() {
            const chatWindow = document.getElementById('chat-window');
            const chatToggle = document.getElementById('chat-toggle');

            chatWindow.classList.toggle('active');

            if (chatWindow.classList.contains('active')) {
                chatToggle.style.display = 'none';
            } else {
                chatToggle.style.display = 'flex';
            }
        }

        function sendMessage() {
            const input = document.getElementById('chat-input');
            const message = input.value.trim();

            if (message) {
                addUserMessage(message);
                input.value = '';

                setTimeout(() => {
                    addBotResponse(message);
                }, 1000);
            }
        }

        function sendQuickReply(topic) {
            addUserMessage(`Tell me about ${topic}`);
            setTimeout(() => {
                addBotResponse(`Tell me about ${topic}`);
            }, 1000);
        }

        function addUserMessage(message) {
            const chatMessages = document.getElementById('chat-messages');
            const messageDiv = document.createElement('div');
            messageDiv.className = 'flex items-start gap-2 justify-end';
            messageDiv.innerHTML = `
                <div class="bg-blue-600 text-white rounded-lg p-3 max-w-xs">
                    <p class="text-sm">${message}</p>
                </div>
                <div class="bg-gray-300 text-gray-600 rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-user"></i>
                </div>
            `;
            chatMessages.appendChild(messageDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        function addBotResponse(userMessage) {
            const chatMessages = document.getElementById('chat-messages');
            const messageDiv = document.createElement('div');
            messageDiv.className = 'flex items-start gap-2';

            let response = '';
            const lowerMessage = userMessage.toLowerCase();

            if (lowerMessage.includes('business permit')) {
                response = 'To apply for a business permit, you need to visit our Municipal Business Office with the following: DTI/SEC registration, barangay clearance, valid ID, and lease contract. You can also download the requirements guide from our Online Services page.';
            } else if (lowerMessage.includes('event')) {
                response = 'You can check our Showroom section for upcoming activities. We regularly update our calendar with community events, public consultations, and municipal programs.';
            } else if (lowerMessage.includes('contact') || lowerMessage.includes('phone')) {
                response = 'You can reach our main office at (049) 501-5000 or email us at info@pagsanjan.gov.ph. For emergencies, dial 911 or our Municipal Operations Center at (049) 501-5000.';
            } else if (lowerMessage.includes('hours') || lowerMessage.includes('open')) {
                response = 'Our municipal office is open Monday to Friday, 8:00 AM to 5:00 PM. Some services may have different schedules.';
            } else {
                response = 'I can help you with information about business permits, events, contact details, office hours, and municipal services. What would you like to know?';
            }

            messageDiv.innerHTML = `
                <div class="bg-blue-100 text-blue-600 rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-robot"></i>
                </div>
                <div class="bg-gray-100 rounded-lg p-3 max-w-xs">
                    <p class="text-sm">${response}</p>
                </div>
            `;
            chatMessages.appendChild(messageDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        document.getElementById('chat-input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });
    </script>
</body>
</html>