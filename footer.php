  </main>
  <!-- =========================
Footer v4
===========================-->
  <footer class="footer bg-secondary relative z-0"
    style="opacity: 1 !important; transform: none !important; filter: none !important;">
    <div class="main-container px-5">
      <div class="flex flex-col md:flex-row items-center justify-between gap-6 py-8 md:py-10"
        style="opacity: 1 !important; transform: none !important;">
        <div class="flex items-center" style="opacity: 1 !important; transform: none !important;">
          <figure class="lg:max-w-[198px] lg:flex hidden" style="
          align-items: center;
          gap: 13px;
      ">
            <img src="./images/truck-dark.png" alt="FleetEmpire" style="
          width: 55px;
      ">
            <h1 style="
          font-size: 20px;
          font-weight: 700;
          color: #fff;
      ">Fleet Empire</h1>
          </figure>
        </div>
        <nav class="flex items-center gap-4 md:gap-6 flex-wrap justify-center"
          style="opacity: 1 !important; transform: none !important;">
          <a href="#services"
            class="footer-link text-tagline-1 font-normal text-primary-50 hover:text-accent transition-colors">
            Services
          </a>
          <a href="#features"
            class="footer-link text-tagline-1 font-normal text-primary-50 hover:text-accent transition-colors">
            Features
          </a>
          <a href="#benefits"
            class="footer-link text-tagline-1 font-normal text-primary-50 hover:text-accent transition-colors">
            Benefits
          </a>
          <a href="#contact"
            class="footer-link text-tagline-1 font-normal text-primary-50 hover:text-accent transition-colors">
            Contact us
          </a>
          <a href="#faq"
            class="footer-link text-tagline-1 font-normal text-primary-50 hover:text-accent transition-colors">
            FAQ
          </a>
        </nav>
      </div>
      <div class="pt-4 pb-6 text-center relative border-t border-accent/10"
        style="opacity: 1 !important; transform: none !important;">
        <p class="text-tagline-2 font-normal text-primary-50/80" style="
        color: #fff;
    ">
          Copyright © 2025 FleetEmpire. All rights reserved.
        </p>
      </div>
    </div>


    <style>
      .demo-showcase-container {
        transform-origin: center center;
        backface-visibility: hidden;
        will-change: transform, opacity, filter;
        transition:
          transform 0.9s cubic-bezier(0.23, 1, 0.32, 1),
          opacity 0.9s cubic-bezier(0.23, 1, 0.32, 1),
          filter 0.9s cubic-bezier(0.23, 1, 0.32, 1);
      }

      .demo-showcase-closed {
        transform: translateX(100%) scale(0.65) rotateY(20deg);
        opacity: 0;
        filter: blur(22px);
      }

      .demo-showcase-open {
        transform: translateX(0) scale(1) rotateY(0deg);
        opacity: 1;
        filter: blur(0px);
      }

      /* Disable animations for footer */
      footer.footer,
      footer.footer *,
      footer.footer [data-ns-animate] {
        opacity: 1 !important;
        transform: none !important;
        filter: none !important;
        transition: none !important;
        animation: none !important;
      }

      /* Fallback: Ensure elements become visible even if JavaScript fails to load */
      /* This ensures hero image, slider, and CTA section are visible */
      @keyframes fadeInFallback {
        to {
          opacity: 1 !important;
          filter: blur(0) !important;
          transform: translate(0, 0) !important;
        }
      }

      /* Fallback for all animated elements - show after 2 seconds if JS doesn't load */
      [data-ns-animate] {
        animation: fadeInFallback 0.1s ease-in 2s forwards;
      }

      /* Ensure hero section images are visible sooner */
      .hero-section figure[data-ns-animate],
      .hero-section > div > div[data-ns-animate] {
        animation: fadeInFallback 0.1s ease-in 1s forwards;
      }

      /* Ensure CTA section is visible - target by section class or structure */
      section.relative.xl\:pt-\[200px\] [data-ns-animate],
      .cta-button {
        animation: fadeInFallback 0.1s ease-in 1.5s forwards;
      }
    </style>




    <script type="text/javascript" src="vendor/swiper.min.js"></script>
    <script type="text/javascript" src="vendor/leaflet.min.js"></script>
    <script type="text/javascript" src="vendor/vanilla-infinite-marquee.min.js"></script>
    <script type="text/javascript" src="vendor/split-text.min.js"></script>
    <script type="text/javascript" src="vendor/gsap.min.js"></script>
    <script type="text/javascript" src="vendor/scroll-trigger.min.js"></script>
    <script type="text/javascript" src="vendor/draw-svg.min.js"></script>
    <script type="text/javascript" src="vendor/motionpathplugin.min.js"></script>
    <script type="text/javascript" src="vendor/lenis.min.js"></script>
    <script type="text/javascript" src="vendor/springer.min.js"></script>
    <script type="text/javascript" src="vendor/number-counter.js"></script>
    <script type="text/javascript" src="vendor/stack-card.min.js"></script>


    <script type="text/javascript" src="assets/main.js"></script>
    
    <!-- Mobile Menu Close on Link Click -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.querySelector('.sidebar');
        const menuLinks = sidebar ? sidebar.querySelectorAll('a[href^="#"]') : [];
        
        // Function to close the sidebar
        function closeSidebar() {
          if (sidebar) {
            sidebar.classList.remove('show-sidebar');
            document.body.classList.remove('overflow-hidden');
          }
        }
        
        // Close sidebar when menu links are clicked
        menuLinks.forEach(function(link) {
          link.addEventListener('click', function() {
            // Small delay to allow smooth scroll before closing
            setTimeout(function() {
              closeSidebar();
            }, 100);
          });
        });
      });
    </script>
  </footer>

</body>

</html>

