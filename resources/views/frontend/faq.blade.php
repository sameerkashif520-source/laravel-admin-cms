<x-frontend.layout>

    <!-- ===== HERO SECTION ===== -->
    <section class="about-hero" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-hero-content">
                        <h1>{{ $faq->hero_title }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <div class="FAQ-container-main">
        <div class="FAQ-right-section">
            <button class="FAQ-close-btn">&times;</button>

            <div class="FAQ-faq-container">
                @for($i = 1; $i <= 10; $i++)
                    <div class="FAQ-faq-item {{ $i == 1 ? 'FAQ-active' : '' }}">
                        <div class="FAQ-faq-header">
                            <h5 class="FAQ-faq-title">{{ $faq->{'faq_' . $i . '_question'} }}</h5>
                            <div class="FAQ-faq-icon"
                                style="background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMTIgNVYxOSIgc3Ryb2tlPSIjMzMzIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIvPjxwYXRoIGQ9Ik01IDEySDE5IiBzdHJva2U9IiMzMzMiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIi8+PC9zdmc+');">
                            </div>
                        </div>
                        <div class="FAQ-faq-content">
                            {{ $faq->{'faq_' . $i . '_answer'} }}
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>

</x-frontend.layout>