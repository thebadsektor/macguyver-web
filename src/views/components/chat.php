<div class="chat-widget">
    <div id="chat-window" class="chat-window bg-white rounded-lg shadow-2xl flex-col">
        <div class="bg-blue-600 text-white p-4 rounded-t-lg flex items-center justify-between">
            <div class="flex items-center gap-2">
                <i class="fas fa-robot text-xl"></i>
                <div>
                    <h3 class="font-bold">Pagsanjan Assistant</h3>
                    <p class="text-xs opacity-90">Always here to help</p>
                </div>
            </div>
            <button onclick="toggleChat()" class="text-white hover:text-gray-200">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>

        <div class="flex-1 p-4 overflow-y-auto space-y-3" id="chat-messages" style="max-height: 380px;">
            <div class="flex items-start gap-2">
                <div class="bg-blue-100 text-blue-600 rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-robot"></i>
                </div>
                <div class="bg-gray-100 rounded-lg p-3 max-w-xs">
                    <p class="text-sm">Hello! I'm your municipal assistant. How can I help you today?</p>
                </div>
            </div>
        </div>

        <div class="p-4 border-t">
            <div class="flex gap-2 mb-2">
                <button onclick="sendQuickReply('business permit')" class="text-xs bg-gray-100 px-3 py-1 rounded-full hover:bg-gray-200">
                    Business Permit
                </button>
                <button onclick="sendQuickReply('events')" class="text-xs bg-gray-100 px-3 py-1 rounded-full hover:bg-gray-200">
                    Events
                </button>
            </div>
            <div class="flex gap-2">
                <input type="text" id="chat-input" placeholder="Type your message..." class="flex-1 px-3 py-2 border rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <button onclick="sendMessage()" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </div>
    </div>

    <button id="chat-toggle" onclick="toggleChat()" class="bg-blue-600 text-white rounded-full w-14 h-14 flex items-center justify-center shadow-lg hover:bg-blue-700 transition">
        <i class="fas fa-comments text-xl"></i>
    </button>
</div>