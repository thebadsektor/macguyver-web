<section id="admin" class="section-padding bg-gray-100 py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg p-6 md:p-8">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-3xl font-bold text-gray-800">Admin Console</h2>
                    <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded text-sm">Prototype Mode</span>
                </div>

                <div class="grid md:grid-cols-4 gap-4 mb-8">
                    <button onclick="showAdminTab('content')" class="admin-tab-btn bg-blue-600 text-white px-4 py-3 rounded-lg font-medium hover:bg-blue-700 transition">
                        <i class="fas fa-file-alt mr-2"></i>Content
                    </button>
                    <button onclick="showAdminTab('documents')" class="admin-tab-btn bg-gray-200 text-gray-700 px-4 py-3 rounded-lg font-medium hover:bg-gray-300 transition">
                        <i class="fas fa-folder mr-2"></i>Documents
                    </button>
                    <button onclick="showAdminTab('chatbot')" class="admin-tab-btn bg-gray-200 text-gray-700 px-4 py-3 rounded-lg font-medium hover:bg-gray-300 transition">
                        <i class="fas fa-robot mr-2"></i>Chatbot
                    </button>
                    <button onclick="showAdminTab('analytics')" class="admin-tab-btn bg-gray-200 text-gray-700 px-4 py-3 rounded-lg font-medium hover:bg-gray-300 transition">
                        <i class="fas fa-chart-bar mr-2"></i>Analytics
                    </button>
                </div>

                <div id="admin-content" class="admin-tab-content">
                    <h3 class="text-xl font-bold mb-4">Content Management</h3>
                    <div class="space-y-4">
                        <div class="border border-gray-200 rounded-lg p-4">
                            <div class="flex items-center justify-between mb-2">
                                <h4 class="font-semibold">Create New News Article</h4>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded text-sm hover:bg-blue-700">
                                    <i class="fas fa-plus mr-1"></i>New Article
                                </button>
                            </div>
                            <p class="text-gray-600 text-sm">Publish news and announcements to the homepage</p>
                        </div>

                        <div class="border border-gray-200 rounded-lg p-4">
                            <h4 class="font-semibold mb-3">Recent Articles</h4>
                            <div class="space-y-2">
                                <div class="flex items-center justify-between bg-gray-50 p-3 rounded">
                                    <div>
                                        <p class="font-medium text-sm">New Bridge Project Inaugurated</p>
                                        <p class="text-xs text-gray-500">Published Oct 25, 2025</p>
                                    </div>
                                    <div class="flex gap-2">
                                        <button class="text-blue-600 hover:text-blue-700 text-sm"><i class="fas fa-edit"></i></button>
                                        <button class="text-red-600 hover:text-red-700 text-sm"><i class="fas fa-trash"></i></button>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between bg-gray-50 p-3 rounded">
                                    <div>
                                        <p class="font-medium text-sm">Free Medical Mission Serves 500+ Residents</p>
                                        <p class="text-xs text-gray-500">Published Oct 22, 2025</p>
                                    </div>
                                    <div class="flex gap-2">
                                        <button class="text-blue-600 hover:text-blue-700 text-sm"><i class="fas fa-edit"></i></button>
                                        <button class="text-red-600 hover:text-red-700 text-sm"><i class="fas fa-trash"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="admin-documents" class="admin-tab-content hidden">
                    <h3 class="text-xl font-bold mb-4">Document Management</h3>
                    <div class="space-y-4">
                        <div class="border border-gray-200 rounded-lg p-4">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="font-semibold">Upload New Document</h4>
                                <button class="bg-green-600 text-white px-4 py-2 rounded text-sm hover:bg-green-700">
                                    <i class="fas fa-upload mr-1"></i>Upload PDF
                                </button>
                            </div>
                            <div class="grid md:grid-cols-3 gap-4">
                                <input type="text" placeholder="Document title" class="px-3 py-2 border rounded text-sm">
                                <select class="px-3 py-2 border rounded text-sm">
                                    <option>Budget Documents</option>
                                    <option>Financial Reports</option>
                                    <option>Ordinances</option>
                                    <option>Executive Orders</option>
                                </select>
                                <input type="file" class="px-3 py-2 border rounded text-sm">
                            </div>
                        </div>

                        <div class="border border-gray-200 rounded-lg p-4">
                            <h4 class="font-semibold mb-3">Recent Uploads</h4>
                            <div class="space-y-2">
                                <div class="flex items-center justify-between bg-gray-50 p-3 rounded">
                                    <div class="flex items-center gap-3">
                                        <i class="far fa-file-pdf text-red-600 text-xl"></i>
                                        <div>
                                            <p class="font-medium text-sm">Q3 2025 Financial Report</p>
                                            <p class="text-xs text-gray-500">Uploaded Oct 15, 2025 - 2.4 MB</p>
                                        </div>
                                    </div>
                                    <button class="text-red-600 hover:text-red-700 text-sm"><i class="fas fa-trash"></i></button>
                                </div>
                                <div class="flex items-center justify-between bg-gray-50 p-3 rounded">
                                    <div class="flex items-center gap-3">
                                        <i class="far fa-file-pdf text-red-600 text-xl"></i>
                                        <div>
                                            <p class="font-medium text-sm">2025 Annual Budget</p>
                                            <p class="text-xs text-gray-500">Uploaded Oct 1, 2025 - 5.1 MB</p>
                                        </div>
                                    </div>
                                    <button class="text-red-600 hover:text-red-700 text-sm"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="admin-chatbot" class="admin-tab-content hidden">
                    <h3 class="text-xl font-bold mb-4">Chatbot Knowledge Base</h3>
                    <div class="space-y-4">
                        <div class="border border-gray-200 rounded-lg p-4">
                            <h4 class="font-semibold mb-3">Add FAQ Entry</h4>
                            <div class="space-y-3">
                                <input type="text" placeholder="Question" class="w-full px-3 py-2 border rounded text-sm">
                                <textarea placeholder="Answer" rows="3" class="w-full px-3 py-2 border rounded text-sm"></textarea>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded text-sm hover:bg-blue-700">
                                    <i class="fas fa-plus mr-1"></i>Add Entry
                                </button>
                            </div>
                        </div>

                        <div class="border border-gray-200 rounded-lg p-4">
                            <h4 class="font-semibold mb-3">Chat Logs (Recent)</h4>
                            <div class="space-y-2">
                                <div class="bg-gray-50 p-3 rounded">
                                    <div class="flex justify-between mb-1">
                                        <span class="text-xs font-medium">Session #1247</span>
                                        <span class="text-xs text-gray-500">Oct 27, 2025 - 2:45 PM</span>
                                    </div>
                                    <p class="text-sm text-gray-700">User asked about business permit requirements</p>
                                </div>
                                <div class="bg-gray-50 p-3 rounded">
                                    <div class="flex justify-between mb-1">
                                        <span class="text-xs font-medium">Session #1246</span>
                                        <span class="text-xs text-gray-500">Oct 27, 2025 - 1:30 PM</span>
                                    </div>
                                    <p class="text-sm text-gray-700">User inquired about upcoming events</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="admin-analytics" class="admin-tab-content hidden">
                    <h3 class="text-xl font-bold mb-4">Analytics Dashboard</h3>
                    <div class="grid md:grid-cols-4 gap-4 mb-6">
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                            <div class="text-blue-600 text-2xl mb-2"><i class="fas fa-users"></i></div>
                            <div class="text-2xl font-bold text-gray-800">12,453</div>
                            <div class="text-sm text-gray-600">Total Visitors</div>
                            <div class="text-xs text-green-600 mt-1"><i class="fas fa-arrow-up"></i> +12% from last month</div>
                        </div>
                        <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                            <div class="text-green-600 text-2xl mb-2"><i class="fas fa-eye"></i></div>
                            <div class="text-2xl font-bold text-gray-800">45,678</div>
                            <div class="text-sm text-gray-600">Page Views</div>
                            <div class="text-xs text-green-600 mt-1"><i class="fas fa-arrow-up"></i> +8% from last month</div>
                        </div>
                        <div class="bg-purple-50 border border-purple-200 rounded-lg p-4">
                            <div class="text-purple-600 text-2xl mb-2"><i class="fas fa-download"></i></div>
                            <div class="text-2xl font-bold text-gray-800">3,421</div>
                            <div class="text-sm text-gray-600">Document Downloads</div>
                            <div class="text-xs text-green-600 mt-1"><i class="fas fa-arrow-up"></i> +15% from last month</div>
                        </div>
                        <div class="bg-orange-50 border border-orange-200 rounded-lg p-4">
                            <div class="text-orange-600 text-2xl mb-2"><i class="fas fa-comments"></i></div>
                            <div class="text-2xl font-bold text-gray-800">892</div>
                            <div class="text-sm text-gray-600">Chatbot Sessions</div>
                            <div class="text-xs text-green-600 mt-1"><i class="fas fa-arrow-up"></i> +23% from last month</div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="border border-gray-200 rounded-lg p-4">
                            <h4 class="font-semibold mb-3">Top Pages</h4>
                            <div class="space-y-2">
                                <div class="flex justify-between text-sm">
                                    <span>What We Power</span>
                                    <span class="font-medium">8,234 views</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span>Out Mindset</span>
                                    <span class="font-medium">8,234 views</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span>Procurement & Bids</span>
                                    <span class="font-medium">4,567 views</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span>Online Services</span>
                                    <span class="font-medium">3,892 views</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span>Showroom</span>
                                    <span class="font-medium">2,145 views</span>
                                </div>
                            </div>
                        </div>

                        <div class="border border-gray-200 rounded-lg p-4">
                            <h4 class="font-semibold mb-3">Chatbot Insights</h4>
                            <div class="space-y-2">
                                <div class="flex justify-between text-sm">
                                    <span>Avg. Session Duration</span>
                                    <span class="font-medium">3m 24s</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span>Avg. Messages per Session</span>
                                    <span class="font-medium">6.8</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span>User Satisfaction</span>
                                    <span class="font-medium">87%</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span>Common Topics</span>
                                    <span class="font-medium text-xs">Permits, Services, Events</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function showAdminTab(tab) {
        const contents = document.querySelectorAll('.admin-tab-content');
        const buttons = document.querySelectorAll('.admin-tab-btn');

        buttons.forEach(btn => {
            btn.classList.remove('bg-blue-600', 'text-white');
            btn.classList.add('bg-gray-200', 'text-gray-700');
        });

        contents.forEach(content => {
            content.classList.add('hidden');
        });

        event.target.classList.remove('bg-gray-200', 'text-gray-700');
        event.target.classList.add('bg-blue-600', 'text-white');

        document.getElementById(`admin-${tab}`).classList.remove('hidden');
    }
</script>