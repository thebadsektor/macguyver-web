<section id="transparency" class="section-padding bg-white py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Downloads</h2>
        <p class="text-gray-600 mb-6">Access public documents, budget reports, and municipal transparency information.</p>

        <div class="mb-6 flex flex-col md:flex-row gap-4">
            <input type="text" id="doc-search" placeholder="Search documents..." class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            <select id="doc-category" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                <option value="all">All Categories</option>
                <option value="budget">Budget Documents</option>
                <option value="aip">Annual Investment Plan</option>
                <option value="financial">Financial Reports</option>
                <option value="ordinance">Ordinances</option>
                <option value="executive">Executive Orders</option>
            </select>
            <select id="doc-year" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                <option value="all">All Years</option>
                <option value="2025">2025</option>
                <option value="2024">2024</option>
                <option value="2023">2023</option>
            </select>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition doc-item" data-category="budget" data-year="2025">
                <div class="flex items-start justify-between mb-4">
                    <div class="bg-blue-100 text-blue-600 rounded-lg p-3">
                        <i class="fas fa-file-invoice-dollar text-2xl"></i>
                    </div>
                    <span class="text-xs font-semibold text-blue-600 bg-blue-100 px-2 py-1 rounded">Budget</span>
                </div>
                <h3 class="font-bold text-lg mb-2">Solutions Guide</h3>
                <p class="text-gray-600 text-sm mb-4">A concise, visually engaging overview of all our core offerings — perfect for sharing or offline reference.</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-500">Updated: Oct 1, 2025</span>
                    <a href="#" class="text-blue-600 hover:underline text-sm font-medium">Download</a>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition doc-item" data-category="aip" data-year="2025">
                <div class="flex items-start justify-between mb-4">
                    <div class="bg-green-100 text-green-600 rounded-lg p-3">
                        <i class="fas fa-calendar-check text-2xl"></i>
                    </div>
                    <span class="text-xs font-semibold text-green-600 bg-green-100 px-2 py-1 rounded">AIP</span>
                </div>
                <h3 class="font-bold text-lg mb-2">Annual Impact Report</h3>
                <p class="text-gray-600 text-sm mb-4">A data-driven look at our milestones, community reach, and performance highlights from the past year.</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-500">Updated: Sep 25, 2025</span>
                    <a href="#" class="text-blue-600 hover:underline text-sm font-medium">Download</a>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition doc-item" data-category="financial" data-year="2025">
                <div class="flex items-start justify-between mb-4">
                    <div class="bg-purple-100 text-purple-600 rounded-lg p-3">
                        <i class="fas fa-chart-line text-2xl"></i>
                    </div>
                    <span class="text-xs font-semibold text-purple-600 bg-purple-100 px-2 py-1 rounded">Financial</span>
                </div>
                <h3 class="font-bold text-lg mb-2">Strategic Roadmap</h3>
                <p class="text-gray-600 text-sm mb-4">A forward-looking document outlining our goals, upcoming projects, and innovation priorities.</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-500">Updated: Oct 15, 2025</span>
                    <a href="#" class="text-blue-600 hover:underline text-sm font-medium">Download</a>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition doc-item" data-category="financial" data-year="2024">
                <div class="flex items-start justify-between mb-4">
                    <div class="bg-purple-100 text-purple-600 rounded-lg p-3">
                        <i class="fas fa-chart-line text-2xl"></i>
                    </div>
                    <span class="text-xs font-semibold text-purple-600 bg-purple-100 px-2 py-1 rounded">Financial</span>
                </div>
                <h3 class="font-bold text-lg mb-2">Research Digest</h3>
                <p class="text-gray-600 text-sm mb-4">A curated collection of studies, insights, and case reports relevant to our field or local initiatives.</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-500">Updated: Jan 15, 2025</span>
                    <a href="#" class="text-blue-600 hover:underline text-sm font-medium">Download</a>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition doc-item" data-category="ordinance" data-year="2025">
                <div class="flex items-start justify-between mb-4">
                    <div class="bg-red-100 text-red-600 rounded-lg p-3">
                        <i class="fas fa-gavel text-2xl"></i>
                    </div>
                    <span class="text-xs font-semibold text-red-600 bg-red-100 px-2 py-1 rounded">Ordinance</span>
                </div>
                <h3 class="font-bold text-lg mb-2">Sustainability Brief</h3>
                <p class="text-gray-600 text-sm mb-4">Our environmental and social commitments summarized for transparency and accountability. </p>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-500">Updated: Oct 20, 2025</span>
                    <a href="#" class="text-blue-600 hover:underline text-sm font-medium">Download</a>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition doc-item" data-category="executive" data-year="2025">
                <div class="flex items-start justify-between mb-4">
                    <div class="bg-yellow-100 text-yellow-600 rounded-lg p-3">
                        <i class="fas fa-file-signature text-2xl"></i>
                    </div>
                    <span class="text-xs font-semibold text-yellow-600 bg-yellow-100 px-2 py-1 rounded">Executive</span>
                </div>
                <h3 class="font-bold text-lg mb-2">Community Handbook</h3>
                <p class="text-gray-600 text-sm mb-4">A friendly, downloadable guide for partners, clients, or residents to understand how to engage with us.</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-500">Updated: Oct 25, 2025</span>
                    <a href="#" class="text-blue-600 hover:underline text-sm font-medium">Download</a>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.getElementById('doc-search').addEventListener('input', function(e) {
        filterDocuments();
    });

    document.getElementById('doc-category').addEventListener('change', function() {
        filterDocuments();
    });

    document.getElementById('doc-year').addEventListener('change', function() {
        filterDocuments();
    });

    function filterDocuments() {
        const searchTerm = document.getElementById('doc-search').value.toLowerCase();
        const category = document.getElementById('doc-category').value;
        const year = document.getElementById('doc-year').value;
        const docItems = document.querySelectorAll('.doc-item');

        docItems.forEach(item => {
            const text = item.textContent.toLowerCase();
            const itemCategory = item.dataset.category;
            const itemYear = item.dataset.year;

            const matchesSearch = text.includes(searchTerm);
            const matchesCategory = category === 'all' || itemCategory === category;
            const matchesYear = year === 'all' || itemYear === year;

            if (matchesSearch && matchesCategory && matchesYear) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }
</script>