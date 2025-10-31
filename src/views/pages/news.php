<section id="news" class="section-padding bg-white py-12">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
            <h2 class="text-3xl font-bold text-gray-800 mb-4 md:mb-0">Showroom</h2>
            <div class="flex flex-wrap gap-2">
                <button onclick="filterNews('all')" class="news-filter px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition">All</button>
                <button onclick="filterNews('Renewable Energy')" class="news-filter px-4 py-2 bg-gray-200 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-300 transition">Renewable Energy</button>
                <button onclick="filterNews('automation')" class="news-filter px-4 py-2 bg-gray-200 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-300 transition">Industrial Automation </button>
                <button onclick="filterNews('electrical')" class="news-filter px-4 py-2 bg-gray-200 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-300 transition">Electrical </button>
                <button onclick="filterNews('infrastructure')" class="news-filter px-4 py-2 bg-gray-200 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-300 transition">Mechanical</button>
                <button onclick="filterNews('Smart Infrastructure')" class="news-filter px-4 py-2 bg-gray-200 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-300 transition">Smart Infrastructure</button>
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6" id="news-container">
            <div class="news-item bg-white rounded-lg shadow-md overflow-hidden" data-category="Renewable Energy">
                <img src="public/70-4-kwp.png" alt="Infrastructure" class="w-full h-48 object-cover">
                <div class="p-4">
                    <span class="text-xs font-semibold text-yellow-600 bg-yellow-100 px-2 py-1 rounded">Solar</span>
                    <h3 class="font-bold text-lg mt-2 mb-2">Dennora Corporation (70.4 kWp Solar PV System)</h3>
                    <p class="text-gray-600 text-sm mb-3">From energy bills to energy independence.</p>
                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <span><i class="far fa-calendar mr-1"></i>October 25, 2025</span>
                        <a href="#" class="text-blue-600 hover:underline">Read More →</a>
                    </div>
                </div>
            </div>

            <div class="news-item bg-white rounded-lg shadow-md overflow-hidden" data-category="Renewable Energy">
                <img src="public/escolapia.png" alt="Health" class="w-full h-48 object-cover">
                <div class="p-4">
                    <span class="text-xs font-semibold text-yellow-600 bg-yellow-100 px-2 py-1 rounded">Solar</span>
                    <h3 class="font-bold text-lg mt-2 mb-2">Municipality of Sta. Cruz (Escolapia Building)</h3>
                    <p class="text-gray-600 text-sm mb-3">Civic infrastructure, now solar-powered.</p>
                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <span><i class="far fa-calendar mr-1"></i>October 22, 2025</span>
                        <a href="#" class="text-blue-600 hover:underline">Read More →</a>
                    </div>
                </div>
            </div>

            <div class="news-item bg-white rounded-lg shadow-md overflow-hidden" data-category="Renewable Energy">
                <img src="public/16kwp.png" alt="Community" class="w-full h-48 object-cover">
                <div class="p-4">
                    <span class="text-xs font-semibold text-yellow-600 bg-yellow-100 px-2 py-1 rounded">Solar</span>
                    <h3 class="font-bold text-lg mt-2 mb-2">Knut Benzrod Resort House (16 kWp Hybrid System)</h3>
                    <p class="text-gray-600 text-sm mb-3">Luxury meets sustainability.</p>
                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <span><i class="far fa-calendar mr-1"></i>October 20, 2025</span>
                        <a href="#" class="text-blue-600 hover:underline">Read More →</a>
                    </div>
                </div>
            </div>

            <div class="news-item bg-white rounded-lg shadow-md overflow-hidden" data-category="Renewable Energy">
                <img src="public/5kw-on-grid.png" alt="Solar" class="w-full h-48 object-cover">
                <div class="p-4">
                    <span class="text-xs font-semibold text-yellow-600 bg-yellow-100 px-2 py-1 rounded">Solar</span>
                    <h3 class="font-bold text-lg mt-2 mb-2">San Pedro, Laguna (5 kW On-Grid System)</h3>
                    <p class="text-gray-600 text-sm mb-3">Solar for modern living.</p>
                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <span><i class="far fa-calendar mr-1"></i>October 18, 2025</span>
                        <a href="#" class="text-blue-600 hover:underline">Read More →</a>
                    </div>
                </div>
            </div>

            <div class="news-item bg-white rounded-lg shadow-md overflow-hidden" data-category="Smart Infrastructure">
                <img src="public/cctv.png" alt="Education" class="w-full h-48 object-cover">
                <div class="p-4">
                    <span class="text-xs font-semibold text-blue-600 bg-blue-100 px-2 py-1 rounded">CCTV</span>
                    <h3 class="font-bold text-lg mt-2 mb-2">Pila & Sta. Cruz, Laguna (CCTV & Command Centers)</h3>
                    <p class="text-gray-600 text-sm mb-3">Security through smart engineering.</p>
                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <span><i class="far fa-calendar mr-1"></i>October 15, 2025</span>
                        <a href="#" class="text-blue-600 hover:underline">Read More →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function filterNews(category) {
        const newsItems = document.querySelectorAll('.news-item');
        const filterBtns = document.querySelectorAll('.news-filter');

        filterBtns.forEach(btn => {
            btn.classList.remove('bg-blue-600', 'text-white');
            btn.classList.add('bg-gray-200', 'text-gray-700');
        });

        event.target.classList.remove('bg-gray-200', 'text-gray-700');
        event.target.classList.add('bg-blue-600', 'text-white');

        newsItems.forEach(item => {
            if (category === 'all' || item.dataset.category === category) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }
</script>