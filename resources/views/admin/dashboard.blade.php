<x-admin.layout>

    <!-- Welcome Hero -->
    <div class="dashboard-hero">
        <div class="dashboard-hero-content">
            <h1 class="dashboard-hero-title">👋 Welcome back, Admin!</h1>
            <p class="dashboard-hero-subtitle">Manage your website content with ease. Everything you need is just one
                click away.</p>
            <div class="dashboard-hero-badges">
                <span class="dashboard-badge">🚀 Last updated: {{ now()->format('M d, Y') }}</span>
                <span class="dashboard-badge">✅ All systems operational</span>
            </div>
        </div>
    </div>

    <!-- Tips Section -->
    <div class="dashboard-tips">
        <div class="dashboard-tips-content">
            <h4 class="dashboard-tips-title">
                <i class="fas fa-lightbulb"></i>
                Pro Tips
            </h4>
            <ul class="dashboard-tips-list">
                <li>Keep your content fresh by updating sections regularly</li>
                <li>Use high-quality images for better visual appeal</li>
                <li>Preview changes on the frontend before announcing updates</li>
                <li>Maintain consistent messaging across all sections</li>
            </ul>
        </div>
    </div>

</x-admin.layout>